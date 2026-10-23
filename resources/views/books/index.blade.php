@extends('layouts.app')

@section('content')
<div class="container py-3">
    <!-- Hero Banner Modern Minimalis -->
    <div class="p-5 mb-5 rounded-4 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #12161f 0%, #0a0c10 100%); border: 1px solid rgba(255, 255, 255, 0.08);">
        <div class="row align-items-center position-relative z-1">
            <div class="col-lg-8">
                <span class="badge bg-warning bg-opacity-10 text-warning border border-warning-subtle px-3 py-1 rounded-pill mb-3 small fw-semibold">Curated Literary Collection</span>
                <h1 class="display-5 fw-bold mb-3 tracking-tight">Ruang Baca & Koleksi Buku Masa Kini</h1>
                <p class="text-secondary lead fs-6 mb-4 col-lg-10">Eksplorasi karya sastra, pengembangan diri, dan pengetahuan terbaik dalam balutan antarmuka yang bersih dan menenangkan.</p>
                <div class="d-flex gap-3">
                    <a href="{{ url('/products') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold text-dark shadow-sm">Jelajahi Katalog</a>
                    <a href="{{ url('/profile') }}" class="btn btn-outline-light rounded-pill px-4 py-2">Tentang Pembuat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Kurasi Pilihan -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-white mb-1">Kurasi Pilihan</h3>
            <p class="text-secondary small mb-0">Pilihan terkurasi untuk pembaca setia.</p>
        </div>
        <a href="{{ url('/products') }}" class="text-decoration-none text-warning small fw-semibold">Lihat Semua &rarr;</a>
    </div>

    <!-- Grid Produk Rapi dan Seragam -->
    <div class="row g-4">
        @foreach($books as $book)
        <div class="col-md-3 col-sm-6">
            <div class="card h-100 border-0 shadow-none bg-transparent product-card">
                <!-- Wrapper Gambar Minimalis -->
                <div class="position-relative overflow-hidden rounded-4 mb-3 bg-secondary bg-opacity-10" style="aspect-ratio: 3/4;">
                    <img src="{{ asset('assets/images/' . $book->image) }}" class="w-100 h-100 object-fit-cover transition-scale" alt="{{ $book->title }}">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-dark bg-opacity-75 backdrop-blur text-warning border border-warning-subtle px-3 py-1 rounded-pill small">{{ $book->genre }}</span>
                    </div>
                </div>

                <!-- Informasi Produk -->
                <div class="card-body p-0 d-flex flex-column">
                    <h5 class="card-title fs-6 fw-bold text-white mb-1 text-truncate">{{ $book->title }}</h5>
                    <p class="text-secondary small mb-2">Oleh <span class="text-light">{{ $book->author }}</span></p>
                    <div class="d-flex align-items-center justify-content-between mt-auto pt-2">
                        <span class="text-warning fw-bold fs-6">Rp {{ number_format($book->price, 0, ',', '.') }}</span>
                        <a href="{{ url('/product/' . $book->id) }}" class="btn btn-sm btn-outline-light rounded-pill px-3 py-1 text-xs">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .transition-scale {
        transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    .product-card:hover .transition-scale {
        transform: scale(1.05);
    }
    .backdrop-blur {
        backdrop-filter: blur(8px);
    }
</style>
@endsection