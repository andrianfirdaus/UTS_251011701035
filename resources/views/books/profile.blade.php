@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm border-0 bg-dark text-light">
                <div class="text-center mb-4">
                    <div class="bg-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center fw-bold fs-1 mb-3" style="width: 90px; height: 90px;">
                        MA
                    </div>
                    <h2 class="fw-bold text-white">Muhamad Andrian Firdaus</h2>
                    <p class="text-warning">Mahasiswa Program Studi Sistem Informasi S-1</p>
                </div>
                <hr class="border-secondary">
                <table class="table table-dark table-borderless mt-3">
                    <tr>
                        <th style="width: 200px;" class="text-secondary">Nomor Induk Mahasiswa</th>
                        <td>: <strong class="text-white">251011701035</strong></td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Fakultas / Program Studi</th>
                        <td>: Ilmu Komputer / Sistem Informasi S-1</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Perguruan Tinggi</th>
                        <td>: Universitas Pamulang</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Mata Kuliah</th>
                        <td>: Rekayasa Web</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Dosen Pengampu</th>
                        <td>: Afif Efendi</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection