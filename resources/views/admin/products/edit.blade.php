@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card bg-dark text-white">
    <div class="card-header">
        <h4 class="mb-0 text-gold">Edit Produk: {{ $product->name }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control bg-secondary text-white" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control bg-secondary text-white" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control bg-secondary text-white" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input class="form-control bg-secondary text-white" type="file" id="image" name="image">
                @if($product->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $product->image) }}" width="100" class="img-thumbnail">
                    <small class="text-muted">Gambar saat ini</small>
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="features" class="form-label">Fitur Produk (pisahkan dengan koma)</label>
                <textarea class="form-control bg-secondary text-white" id="features" name="features" rows="3" required>{{ $product->features }}</textarea>
            </div>
            <button type="submit" class="btn btn-gold">Update Produk</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection