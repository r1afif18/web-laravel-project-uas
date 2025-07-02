@extends('layouts.app')

@section('title', 'Kelola Testimonial')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-gold">Daftar Testimonial</h2>
    <a href="{{ route('testimonials.create') }}" class="btn btn-gold">
        <i class="fas fa-plus me-1"></i> Tambah Testimonial
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Penulis</th>
                <th>Lokasi</th>
                <th>Testimonial</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $testimonial->author_name }}</td>
                <td>{{ $testimonial->author_location }}</td>
                <td>{{ Str::limit($testimonial->content, 50) }}</td>
                <td>
                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-outline-warning me-1">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                            onclick="return confirm('Hapus testimonial ini?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection