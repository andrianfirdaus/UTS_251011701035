<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title'   => 'Laskar Pelangi',
                'author'  => 'Andrea Hirata',
                'genre'   => 'Novel',
                'price'   => 85000,
                'image'   => '1.jpg',
                'summary' => 'Kisah perjuangan sepuluh anak di Belitung dalam menempuh pendidikan dengan segala keterbatasan fasilitas dan sarana.'
            ],
            [
                'title'   => 'Bumi',
                'author'  => 'Tere Liye',
                'genre'   => 'Fantasi',
                'price'   => 95000,
                'image'   => '2.jpg',
                'summary' => 'Petualangan Raib, Seli, dan Ali menelusuri dunia paralel dan mengungkap kekuatan rahasia di dalam diri mereka.'
            ],
            [
                'title'   => 'Filosofi Teras',
                'author'  => 'Henry Manampiring',
                'genre'   => 'Self Development',
                'price'   => 98000,
                'image'   => '3.jpg',
                'summary' => 'Panduan penerapan filsafat Stoisisme kuno untuk meredakan kecemasan dan mengendalikan emosi negatif di era modern.'
            ],
            [
                'title'   => 'Laut Bercerita',
                'author'  => 'Leila S. Chudori',
                'genre'   => 'Fiksi Sejarah',
                'price'   => 115000,
                'image'   => '4.jpg',
                'summary' => 'Kisah perjuangan aktivis mahasiswa era 1998 dan ketabahan keluarga korban penghilangan orang secara paksa.'
            ],
            [
                'title'   => 'Atomic Habits',
                'author'  => 'James Clear',
                'genre'   => 'Self Development',
                'price'   => 128000,
                'image'   => '5.jpg',
                'summary' => 'Cara mudah dan terbukti untuk membangun kebiasaan baik serta menghilangkan kebiasaan buruk melalui perubahan kecil.'
            ],
            [
                'title'   => 'Cantik Itu Luka',
                'author'  => 'Eka Kurniawan',
                'genre'   => 'Sastra',
                'price'   => 110000,
                'image'   => '6.jpg',
                'summary' => 'Perpaduan sejarah, mitos, dan realisme magis yang mengisahkan kehidupan Dewi Ayu beserta keturunannya di Halimunda.'
            ],
            [
                'title'   => 'Dilan 1990',
                'author'  => 'Pidi Baiq',
                'genre'   => 'Romantis',
                'price'   => 79000,
                'image'   => '7.jpg',
                'summary' => 'Kisah romansa masa sekolah menengah atas di Bandung antara Dilan dan Milea pada tahun 1990.'
            ],
            [
                'title'   => 'Negeri 5 Menara',
                'author'  => 'Ahmad Fuadi',
                'genre'   => 'Novel',
                'price'   => 88000,
                'image'   => '8.jpg',
                'summary' => 'Cerita enam santri di Pesantren Madani yang meyakini mantra sakti Man Jadda Wajada untuk meraih impian.'
            ],
            [
                'title'   => 'Garis Waktu',
                'author'  => 'Fiersa Besari',
                'genre'   => 'Sastra',
                'price'   => 75000,
                'image'   => '9.jpg',
                'summary' => 'Kumpulan cerita dan patahan kata tentang perjalanan merelakan, bertahan, hingga kembali menemukan tujuan.'
            ],
            [
                'title'   => 'Sapiens',
                'author'  => 'Yuval Noah Harari',
                'genre'   => 'Sejarah',
                'price'   => 145000,
                'image'   => '10.jpg',
                'summary' => 'Riwayat singkat peradaban manusia dari Zaman Batu hingga revolusi kognitif dan teknologi abad ke-21.'
            ],
        ]);
    }
}