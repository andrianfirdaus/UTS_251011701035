<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;

// 1. Halaman Home / Beranda
Route::get('/', function () {
    $books = Book::take(4)->get();
    return view('books.index', compact('books'));
});

// 2. Halaman Profile Pembuat
Route::get('/profile', function () {
    return view('books.profile');
});

// 3. Halaman Product / Katalog (Dilengkapi Search & Filter Kategori)
Route::get('/products', function (Request $request) {
    $query = Book::query();

    // Fitur Pencarian berdasarkan Judul atau Penulis
    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('title', 'LIKE', "%{$search}%")
              ->orWhere('author', 'LIKE', "%{$search}%");
        });
    }

    // Fitur Filter Berdasarkan Kategori / Genre
    if ($request->has('genre') && $request->genre != '') {
        $query->where('genre', $request->genre);
    }

    // Paginasi minimal 8 buku per halaman
    $books = $query->paginate(8)->withQueryString();

    // Ambil daftar unik genre untuk dropdown filter
    $genres = Book::select('genre')->distinct()->pluck('genre');

    return view('books.product', compact('books', 'genres'));
});

// 4. Halaman Detail Produk Berdasarkan ID
Route::get('/product/{id}', function ($id) {
    $book = Book::findOrFail($id);
    return view('books.detail', compact('book'));
});

// 5. Halaman About
Route::get('/about', function () {
    return view('books.about');
});

// 6. Halaman Contact
Route::get('/contact', function () {
    return view('books.contact');
});