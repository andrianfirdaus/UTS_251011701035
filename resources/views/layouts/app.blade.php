<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina Bookspace - Minimalist Literary Space</title>
    
    <!-- Memanggil Bootstrap CSS secara lokal dari folder public/Bootstrap -->
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Google Fonts: Plus Jakarta Sans (Gaya Minimalis Modern Bersih) -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-dark: #0a0c10;
            --surface-dark: #12161f;
            --border-color: rgba(255, 255, 255, 0.08);
            --accent-gold: #d4af37;
        }

        /* Terapkan Plus Jakarta Sans secara menyeluruh untuk gaya minimalis bersih */
        body {
            background-color: var(--bg-dark);
            color: #cbd5e1;
            font-family: 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -0.01em;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, .navbar-brand {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            letter-spacing: -0.03em;
        }

        /* Navbar Minimalist Glassmorphism */
        .navbar {
            background: rgba(10, 12, 16, 0.85) !important;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: #ffffff !important;
            letter-spacing: -0.02em;
        }

        .nav-link {
            color: #94a3b8 !important;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffffff !important;
        }

        /* Kartu Produk Minimalis */
        .card {
            background-color: var(--surface-dark);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        /* Hero Section Minimalis */
        .hero-section {
            background: linear-gradient(135deg, rgba(18, 22, 31, 0.9) 0%, rgba(10, 12, 16, 0.95) 100%);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 60px 25px;
        }

        footer {
            background-color: #07090d;
            border-top: 1px solid var(--border-color);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Lumina Bookspace</a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-4">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 text-muted mt-5">
        <div class="container">
            <p class="mb-1">&copy; 2026 Lumina Bookspace. Ujian Tengah Semester Rekayasa Web - Universitas Pamulang[cite: 1]</p>
            <p class="small text-secondary">NIM: <strong class="text-light">251011701035</strong> | Nama: <strong class="text-light">Muhamad Andrian Firdaus</strong></p>
        </div>
    </footer>

    <!-- Memanggil Bootstrap JS secara lokal dari folder public/Bootstrap -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>