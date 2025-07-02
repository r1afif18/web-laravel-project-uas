@extends('layouts.app')

@section('title', 'Tambah Testimonial')

@section('content')
<div class="card bg-dark text-white">
    <div class="card-header">
        <h4 class="mb-0 text-gold">Tambah Testimonial Baru</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('testimonials.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="author_name" class="form-label">Nama Penulis</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_name" name="author_name" required>
            </div>
            <div class="mb-3">
                <label for="author_location" class="form-label">Lokasi</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_location" name="author_location" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Isi Testimonial</label>
                <textarea class="form-control bg-secondary text-white" id="content" name="content" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="author_initial" class="form-label">Inisial Penulis (1 huruf)</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_initial" name="author_initial" maxlength="1" required>
            </div>
            <button type="submit" class="btn btn-gold">Simpan Testimonial</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection