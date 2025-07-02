@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="card bg-dark text-white">
    <div class="card-header">
        <h4 class="mb-0 text-gold">Tambah Produk Baru</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control bg-secondary text-white" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control bg-secondary text-white" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control bg-secondary text-white" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input class="form-control bg-secondary text-white" type="file" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="features" class="form-label">Fitur Produk (pisahkan dengan koma)</label>
                <textarea class="form-control bg-secondary text-white" id="features" name="features" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-gold">Simpan Produk</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection