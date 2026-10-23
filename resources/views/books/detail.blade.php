@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <a href="{{ url('/products') }}" class="text-decoration-none text-secondary small hover-gold">&larr; Kembali ke Katalog</a>
    </div>

    <div class="row g-5 align-items-center">
        <!-- Kolom Gambar Sampul -->
        <div class="col-md-4">
            <div class="rounded-4 overflow-hidden bg-secondary bg-opacity-10 shadow-lg" style="aspect-ratio: 3/4;">
                <img src="{{ asset('assets/images/' . $book->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $book->title }}">
            </div>
        </div>

        <!-- Kolom Detail Informasi Buku -->
        <div class="col-md-8">
            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning-subtle px-3 py-1 rounded-pill mb-3 small fw-semibold">{{ $book->genre }}</span>
            <h1 class="fw-bold text-white display-5 mb-2">{{ $book->title }}</h1>
            <p class="text-secondary fs-5 mb-4">Penulis: <span class="text-light fw-medium">{{ $book->author }}</span></p>
            
            <div class="p-4 rounded-4 mb-4" style="background-color: #12161f; border: 1px solid rgba(255, 255, 255, 0.06);">
                <h3 class="text-warning fw-bold fs-4 mb-2">Rp {{ number_format($book->price, 0, ',', '.') }}</h3>
                <span class="text-success small">● Stok Tersedia & Siap Kirim</span>
            </div>

            <h5 class="text-white fw-semibold mb-2">Sinopsis Buku</h5>
            <p class="text-secondary line-height-relaxed mb-4" style="line-height: 1.8;">{{ $book->summary }}</p>

            <div class="d-flex gap-3">
                <button class="btn btn-warning rounded-pill px-4 py-2 fw-semibold text-dark shadow-sm" onclick="alert('Fitur pemesanan langsung segera hadir!')">Pesan Buku Sekarang</button>
                <a href="{{ url('/products') }}" class="btn btn-outline-light rounded-pill px-4 py-2">Lihat Buku Lainnya</a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-gold:hover {
        color: #d4af37 !important;
    }
</style>
@endsection