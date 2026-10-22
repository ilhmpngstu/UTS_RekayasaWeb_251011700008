<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'EduLearn - Platform Belajar Online') | UTS Rekayasa Web</title>

    <!-- Asset Bootstrap Lokal (Sesuai Petunjuk Soal Poin 5) -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    
    <!-- Bootstrap Icons (Lokal & CDN Fallback) -->
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <style>
        :root {
            --unpam-blue: #003366;
            --unpam-dark-blue: #002244;
            --unpam-gold: #ffc107;
            --unpam-accent: #0d6efd;
            --bg-light: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg-light);
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        /* Header Banner Sesuai Format UTS UNPAM */
        .uts-header {
            background: linear-gradient(135deg, #fdfbf7 0%, #f4f6fb 50%, #eef2ff 100%);
            border-bottom: 2px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        .uts-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #003366 0%, #0d6efd 50%, #ffc107 100%);
        }

        .header-title {
            font-family: 'Playfair Display', Georgia, serif;
            color: #1e293b;
            letter-spacing: -0.5px;
        }

        .identity-box {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            border: 1.5px dashed #003366;
            border-radius: 12px;
            padding: 12px 24px;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(0, 51, 102, 0.06);
        }

        /* Navbar Styling */
        .navbar-uts {
            background-color: var(--unpam-dark-blue) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-uts .nav-link {
            color: #cbd5e1;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s ease-in-out;
        }

        .navbar-uts .nav-link:hover,
        .navbar-uts .nav-link.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.12);
        }

        /* Cards & Buttons */
        .course-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            overflow: hidden;
            background: #ffffff;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .course-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .course-img-wrapper {
            position: relative;
            aspect-ratio: 16 / 10;
            overflow: hidden;
            background-color: #0f172a;
        }

        .course-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .course-card:hover .course-img-wrapper img {
            transform: scale(1.04);
        }

        .badge-category {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.4rem 0.75rem;
            border-radius: 20px;
            background-color: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
        }

        .price-tag {
            font-size: 1.2rem;
            font-weight: 800;
            color: #0f172a;
        }

        /* Footer */
        .footer-uts {
            background-color: #0b1329;
            color: #94a3b8;
            font-size: 0.9rem;
            margin-top: auto;
        }

        .footer-uts a {
            color: #cbd5e1;
            text-decoration: none;
        }

        .footer-uts a:hover {
            color: #38bdf8;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- TOP HEADER / BANNER KAMPUS (Sesuai Format Soal Halaman 2) -->
    <header class="uts-header py-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Sisi Kiri: Logo & Ilustrasi -->
                <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/logo-sasmitajaya.svg') }}" alt="Yayasan Sasmita Jaya" height="75" class="shadow-sm rounded-circle p-1 bg-white">
                    <img src="{{ asset('assets/images/logo-unpam.svg') }}" alt="Universitas Pamulang" height="75" class="shadow-sm rounded-circle p-1 bg-white">
                </div>

                <!-- Bagian Tengah: Judul & Identitas Mahasiswa -->
                <div class="col-lg-6 col-md-12 text-center">
                    <div class="d-flex justify-content-center align-items-center gap-2 mb-2 d-lg-none">
                        <img src="{{ asset('assets/images/logo-sasmitajaya.svg') }}" alt="Yayasan Sasmita Jaya" height="42">
                        <img src="{{ asset('assets/images/logo-unpam.svg') }}" alt="Universitas Pamulang" height="42">
                    </div>
                    
                    <p class="text-uppercase text-secondary fw-bold small mb-1" style="letter-spacing: 2px;">
                        Universitas Pamulang &bull; Fakultas Ilmu Komputer
                    </p>
                    <h5 class="text-muted fw-normal mb-0 fst-italic">Welcome To</h5>
                    <h1 class="header-title fw-bold mb-3 display-6">
                        Platform Belajar Online
                    </h1>

                    <!-- Box Identitas Mahasiswa (Sesuai Contoh Soal) -->
                    <div class="identity-box">
                        <div class="fw-bold text-dark fs-5 mb-0" style="letter-spacing: 1px;">
                            251011700008
                        </div>
                        <div class="text-primary small fw-semibold">
                            ilham@unpam.ac.id
                        </div>
                        <div class="text-secondary small">
                            Prodi Sistem Informasi S-1 (Kelas 03SIFE003)
                        </div>
                        <div class="badge bg-primary text-white mt-1 px-3 py-1">
                            Dosen: Afif Efendi, M.Kom.
                        </div>
                    </div>
                </div>

                <!-- Sisi Kanan: Ilustrasi Edukasi -->
                <div class="col-lg-3 d-none d-lg-flex justify-content-end">
                    <img src="{{ asset('assets/images/hero-illustration.svg') }}" alt="EduLearn Illustration" height="120" class="filter drop-shadow">
                </div>
            </div>
        </div>
    </header>

    <!-- NAVBAR BOOTSTRAP -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-uts sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('courses.index') }}">
                <span class="badge bg-warning text-dark"><i class="bi bi-mortarboard-fill"></i></span>
                <span>EduLearn<span class="text-warning">.UNPAM</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('courses.index') ? 'active' : '' }}" href="{{ route('courses.index') }}">
                            <i class="bi bi-grid-fill me-1"></i> Katalog Kursus (Grid)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('courses.table') ? 'active' : '' }}" href="{{ route('courses.table') }}">
                            <i class="bi bi-table me-1"></i> Data Tabel
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags-fill me-1"></i> Kategori
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('courses.index') }}">Semua Kategori</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Web Development']) }}">Web Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Programming']) }}">Programming</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Design']) }}">Design</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Data Science']) }}">Data Science</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Cyber Security']) }}">Cyber Security</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Mobile Development']) }}">Mobile Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('courses.index', ['category' => 'Cloud & DevOps']) }}">Cloud & DevOps</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            <i class="bi bi-person-badge me-1"></i> Identitas & UTS
                        </a>
                    </li>
                </ul>

                <!-- Form Pencarian Cepat di Navbar -->
                <form class="d-flex" action="{{ route('courses.index') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="search" name="search" placeholder="Cari kursus / materi..." value="{{ request('search') }}" aria-label="Search">
                        <button class="btn btn-warning btn-sm" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- FOOTER APLIKASI -->
    <footer class="footer-uts py-4 border-top border-secondary">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h6 class="text-white fw-bold mb-1">
                        <i class="bi bi-mortarboard-fill text-warning me-2"></i>UTS Rekayasa Web &bull; Semester Ganjil 2026/2027
                    </h6>
                    <p class="mb-0 small text-secondary">
                        Program Studi Sistem Informasi S-1 &bull; Fakultas Ilmu Komputer &bull; Universitas Pamulang
                    </p>
                    <p class="mb-0 small text-secondary">
                        Tema: <strong>Platform Belajar Online (courses)</strong> &bull; Dosen: <strong>Afif Efendi, M.Kom.</strong>
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="fw-semibold text-white small">Mahasiswa Pengembang:</div>
                    <div class="text-warning fw-bold">Ilham Pangestu (NIM: 251011700008)</div>
                    <div class="small text-secondary">Kelas: 03SIFE003 &bull; Database: <code>db_uts_251011700008</code></div>
                </div>
            </div>
            <hr class="border-secondary my-3 opacity-25">
            <div class="row">
                <div class="col-12 text-center text-secondary small">
                    &copy; {{ date('Y') }} EduLearn Platform. Dibuat menggunakan Laravel, Blade Template, dan Bootstrap.
                </div>
            </div>
        </div>
    </footer>

    <!-- Asset Bootstrap JS Lokal (Sesuai Petunjuk Soal Poin 5) -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
