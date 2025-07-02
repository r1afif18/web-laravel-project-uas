@extends('layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
<div class="card bg-dark text-white">
    <div class="card-header">
        <h4 class="mb-0 text-gold">Edit Testimonial: {{ $testimonial->author_name }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="author_name" class="form-label">Nama Penulis</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_name" name="author_name" value="{{ $testimonial->author_name }}" required>
            </div>
            <div class="mb-3">
                <label for="author_location" class="form-label">Lokasi</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_location" name="author_location" value="{{ $testimonial->author_location }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Isi Testimonial</label>
                <textarea class="form-control bg-secondary text-white" id="content" name="content" rows="3" required>{{ $testimonial->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="author_initial" class="form-label">Inisial Penulis (1 huruf)</label>
                <input type="text" class="form-control bg-secondary text-white" id="author_initial" name="author_initial" maxlength="1" value="{{ $testimonial->author_initial }}" required>
            </div>
            <button type="submit" class="btn btn-gold">Update Testimonial</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection