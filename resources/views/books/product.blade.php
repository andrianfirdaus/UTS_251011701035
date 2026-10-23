@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header & Search/Filter Section -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <span class="badge bg-warning text-dark mb-2">Eksklusif Koleksi</span>
            <h2 class="fw-bold text-white mb-1">Katalog Seluruh Produk Buku</h2>
            <p class="text-secondary mb-0">Temukan bacaan berkualitas untuk memperluas wawasan Anda.</p>
        </div>
        <div class="col-lg-6">
            <!-- Form Pencarian & Filter Kategori -->
            <form action="{{ url('/products') }}" method="GET" class="row g-2 justify-content-lg-end">
                <div class="col-sm-6">
                    <input type="text" name="search" class="form-control bg-dark text-light border-secondary" placeholder="Cari judul/penulis..." value="{{ request('search') }}">
                </div>
                <div class="col-sm-5">
                    <select name="genre" class="form-select bg-dark text-light border-secondary">
                        <option value="">Semua Kategori</option>
                        @foreach($genres ?? [] as $g)
                            <option value="{{ $g }}" {{ request('genre') == $g ? 'selected' : '' }}>{{ $g }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1 d-grid">
                    <button type="submit" class="btn btn-warning">🔍</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grid Produk dengan Ukuran Gambar Terkontrol & Rapi -->
    <div class="row g-4">
        @forelse($books as $book)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card h-100 shadow-sm border-secondary bg-dark text-light rounded-4 overflow-hidden">
                <!-- Wrapper Gambar Seragam (Aspect Ratio 3:4) -->
                <div class="position-relative bg-black" style="aspect-ratio: 3/4; overflow: hidden;">
                    <img src="{{ asset('assets/images/' . $book->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $book->title }}">
                    <div class="position-absolute top-0 start-0 m-2">
                        <span class="badge bg-dark bg-opacity-75 text-warning border border-secondary px-2 py-1 rounded-pill small">{{ $book->genre }}</span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body d-flex flex-column p-3">
                    <h5 class="card-title fs-6 fw-bold text-white text-truncate mb-1">{{ $book->title }}</h5>
                    <p class="text-muted small mb-2">Oleh: {{ $book->author }}</p>
                    <p class="text-warning fw-bold mb-3">Rp {{ number_format($book->price, 0, ',', '.') }}</p>
                    <a href="{{ url('/product/' . $book->id) }}" class="btn btn-outline-light btn-sm mt-auto rounded-pill">Detail Buku</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted fs-5">Maaf, buku yang Anda cari tidak ditemukan.</p>
            <a href="{{ url('/products') }}" class="btn btn-outline-warning btn-sm px-4 rounded-pill">Reset Pencarian</a>
        </div>
        @endforelse
    </div>

    <!-- Paginasi Bootstrap -->
    <div class="d-flex justify-content-center mt-5">
        {{ $books->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection