@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card p-5 shadow-sm bg-dark text-light border-0">
                <h2 class="fw-bold text-warning mb-3">Tentang Galeri Buku UNPAM</h2>
                <p class="text-secondary" style="line-height: 1.8;">
                    Galeri Buku adalah platform sistem penjualan buku berbasis web modern yang dikembangkan sebagai bagian dari pemenuhan Ujian Tengah Semester (UTS) mata kuliah <strong>Rekayasa Web</strong> di Program Studi Sistem Informasi S-1, Fakultas Ilmu Komputer, Universitas Pamulang.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    Website ini dirancang menggunakan framework Laravel, Blade Template, dan styling antarmuka menggunakan Bootstrap untuk memberikan pengalaman pengguna yang cepat, responsif, elegan, dan informatif.
                </p>
                <hr class="border-secondary my-4">
                <h5 class="text-white fw-bold">Teknologi yang Digunakan:</h5>
                <ul class="text-secondary">
                    <li>Laravel Framework (PHP 8.3+)</li>
                    <li>Bootstrap 5 Styling Framework</li>
                    <li>MySQL Database & Eloquent ORM</li>
                    <li>Git & GitHub Version Control</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection