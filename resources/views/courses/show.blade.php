@extends('layouts.app')

@section('title', $course->title . ' - Detail Kursus')

@section('content')
<div class="container mb-5">

    <!-- BREADCRUMB NAVIGASI -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-white p-3 rounded-4 shadow-sm mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('courses.index') }}" class="text-decoration-none">
                    <i class="bi bi-house-door-fill me-1"></i> Beranda
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('courses.index', ['category' => $course->category]) }}" class="text-decoration-none">
                    {{ $course->category }}
                </a>
            </li>
            <li class="breadcrumb-item active text-truncate" aria-current="page" style="max-width: 350px;">
                {{ $course->title }}
            </li>
        </ol>
    </nav>

    <div class="row g-4">
        <!-- KOLOM UTAMA: DETAIL KURSUS & KURIKULUM -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                <!-- Cover Image Kursus (public/assets/images/) -->
                <div class="position-relative" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1e293b 0%, #334155 100%); overflow: hidden;">
                    <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-100 h-100" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 p-3 w-100" style="background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.8) 100%);">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill">
                            <i class="bi bi-bookmark-star-fill me-1"></i> Kursus Unggulan
                        </span>
                    </div>
                </div>

                <!-- Info Header Kursus -->
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                        <span class="badge-category fs-6">
                            <i class="bi bi-tag-fill me-1"></i>{{ $course->category }}
                        </span>
                        <span class="badge bg-light text-secondary border">
                            <i class="bi bi-clock-history me-1 text-warning"></i>{{ $course->duration }}
                        </span>
                        <span class="badge bg-light text-secondary border">
                            <i class="bi bi-translate me-1 text-primary"></i>Bahasa Indonesia
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark mt-2 mb-3">
                        {{ $course->title }}
                    </h2>

                    <!-- Profil Instruktur -->
                    <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 mb-4">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 52px; height: 52px; font-size: 1.5rem;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div>
                            <div class="small text-muted">Instruktur Kursus</div>
                            <h6 class="fw-bold mb-0 text-dark">{{ $course->instructor }}</h6>
                            <div class="text-secondary small">
                                <i class="bi bi-patch-check-fill text-primary"></i> Mentor Tersertifikasi Industri
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi Kursus -->
                    <h5 class="fw-bold text-dark mb-3">
                        <i class="bi bi-card-text text-primary me-2"></i>Tentang Kursus Ini
                    </h5>
                    <p class="text-secondary lh-lg mb-4" style="font-size: 1.05rem;">
                        {{ $course->description }}
                    </p>

                    <!-- Poin Manfaat / Apa yang dipelajari -->
                    <h5 class="fw-bold text-dark mb-3">
                        <i class="bi bi-check2-circle text-success me-2"></i>Yang Akan Anda Pelajari
                    </h5>
                    <div class="row g-2 mb-4">
                        <div class="col-md-6">
                            <div class="p-2 border rounded-3 bg-white d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span class="small">Pemahaman konsep dasar hingga implementasi tingkat lanjut secara terstruktur.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2 border rounded-3 bg-white d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span class="small">Pengerjaan proyek nyata (hands-on portfolio) yang siap dipamerkan ke industri.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2 border rounded-3 bg-white d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span class="small">Akses file materi, source code lengkap, dan studi kasus berbasis industri.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2 border rounded-3 bg-white d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span class="small">Konsultasi forum diskusi dan sertifikat resmi setelah menyelesaikan kuis & ujian.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Silabus / Kurikulum (Accordion Bootstrap) -->
                    <h5 class="fw-bold text-dark mb-3">
                        <i class="bi bi-journal-bookmark-fill text-warning me-2"></i>Silabus Pembelajaran
                    </h5>
                    <div class="accordion mb-3" id="syllabusAccordion">
                        <div class="accordion-item border rounded-3 mb-2 overflow-hidden">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Modul 1: Pengenalan & Persiapan Lingkungan Pengembangan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#syllabusAccordion">
                                <div class="accordion-body small text-secondary">
                                    Mengenal arsitektur dasar, instalasi tools (PHP, Composer, Node.js, Git, Docker, Database), konfigurasi environment, serta workflow efisien untuk pengembangan aplikasi modern.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-2 overflow-hidden">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Modul 2: Fundamental & Best Practices
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#syllabusAccordion">
                                <div class="accordion-body small text-secondary">
                                    Mempelajari konsep fundamental, sintaks penting, struktur kode modular, penanganan error, manajemen database relasional, dan penerapan best practices industri.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Modul 3: Final Project & Sertifikasi Kompetensi
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#syllabusAccordion">
                                <div class="accordion-body small text-secondary">
                                    Membangun proyek capstone secara mandiri dari perancangan hingga pengujian sistem, deployment ke server cloud, review kode, dan klaim e-sertifikat kelulusan.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- SIDEBAR: HARGA, FASILITAS, TOMBOL AKSI & SPESIFIKASI -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top: 90px;">
                <div class="card-body p-4">
                    <div class="text-secondary small mb-1">Investasi Pendidikan:</div>
                    <div class="display-6 fw-bold text-primary mb-3">
                        {{ $course->formatted_price }}
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-grid gap-2 mb-4">
                        <button type="button" class="btn btn-warning btn-lg fw-bold rounded-3 shadow-sm py-3" data-bs-toggle="modal" data-bs-target="#enrollModal" data-course-title="{{ $course->title }}" data-course-price="{{ $course->formatted_price }}">
                            <i class="bi bi-cart-check-fill me-2"></i> Daftar Kursus Ini
                        </button>
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary rounded-3">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke Katalog
                        </a>
                        <a href="{{ route('courses.table') }}" class="btn btn-link text-decoration-none text-muted small text-center">
                            <i class="bi bi-table me-1"></i> Lihat Dalam Tampilan Tabel
                        </a>
                    </div>

                    <hr class="my-3">

                    <!-- Spesifikasi Kursus -->
                    <h6 class="fw-bold text-dark mb-3">
                        <i class="bi bi-shield-check text-success me-1"></i> Fasilitas Pembelajaran:
                    </h6>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                        <li class="d-flex align-items-center justify-content-between py-1 border-bottom">
                            <span class="text-muted"><i class="bi bi-person me-2 text-primary"></i>Instruktur</span>
                            <span class="fw-semibold text-end text-dark">{{ $course->instructor }}</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between py-1 border-bottom">
                            <span class="text-muted"><i class="bi bi-tag me-2 text-primary"></i>Kategori</span>
                            <span class="fw-semibold text-end text-dark">{{ $course->category }}</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between py-1 border-bottom">
                            <span class="text-muted"><i class="bi bi-clock me-2 text-primary"></i>Total Durasi</span>
                            <span class="fw-semibold text-end text-dark">{{ $course->duration }}</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between py-1 border-bottom">
                            <span class="text-muted"><i class="bi bi-infinity me-2 text-primary"></i>Akses Materi</span>
                            <span class="badge bg-success-subtle text-success fw-bold">Seumur Hidup</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between py-1 border-bottom">
                            <span class="text-muted"><i class="bi bi-award me-2 text-primary"></i>Sertifikat</span>
                            <span class="badge bg-info-subtle text-info fw-bold">Tersedia</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between py-1">
                            <span class="text-muted"><i class="bi bi-code-slash me-2 text-primary"></i>Source Code</span>
                            <span class="fw-semibold text-dark">Lengkap (GitHub)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- KURSUS TERKAIT / REKOMENDASI -->
    @if(isset($relatedCourses) && $relatedCourses->count() > 0)
        <div class="mt-5 pt-3">
            <h4 class="fw-bold mb-3 text-dark">
                <i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Kursus Terkait Lainnya
            </h4>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($relatedCourses as $rel)
                    <div class="col">
                        <div class="card h-100 course-card">
                            <div class="course-img-wrapper">
                                <img src="{{ $rel->image_url }}" alt="{{ $rel->title }}" loading="lazy">
                                <span class="position-absolute top-0 end-0 m-2 badge bg-dark bg-opacity-75 rounded-pill px-2 py-1 small">
                                    {{ $rel->duration }}
                                </span>
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <span class="badge-category mb-2 align-self-start">{{ $rel->category }}</span>
                                <h6 class="card-title fw-bold text-dark mb-2">
                                    <a href="{{ route('courses.show', $rel->id) }}" class="text-decoration-none text-dark hover-primary">
                                        {{ $rel->title }}
                                    </a>
                                </h6>
                                <div class="text-secondary small mb-3">
                                    <i class="bi bi-person me-1"></i>{{ $rel->instructor }}
                                </div>
                                <div class="mt-auto pt-2 border-top d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">{{ $rel->formatted_price }}</span>
                                    <a href="{{ route('courses.show', $rel->id) }}" class="btn btn-outline-primary btn-sm rounded-pill">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</div>

<!-- MODAL DAFTAR KURSUS -->
<div class="modal fade" id="enrollModal" tabindex="-1" aria-labelledby="enrollModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="enrollModalLabel">
                    <i class="bi bi-mortarboard-fill me-2 text-warning"></i>Pendaftaran Kursus
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-info py-2 px-3 small rounded-3 mb-3">
                    <i class="bi bi-info-circle-fill me-1"></i> Akses materi langsung aktif segera setelah pendaftaran dikonfirmasi.
                </div>
                <h6 class="fw-bold mb-1" id="modalCourseTitle">{{ $course->title }}</h6>
                <div class="text-primary fw-bold fs-5 mb-3" id="modalCoursePrice">{{ $course->formatted_price }}</div>

                <form id="enrollForm" onsubmit="event.preventDefault(); alert('Terima kasih! Pendaftaran berhasil dicatat (Simulasi UTS Rekayasa Web)'); bootstrap.Modal.getInstance(document.getElementById('enrollModal')).hide();">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Lengkap Peserta</label>
                        <input type="text" class="form-control" required placeholder="Masukkan nama Anda" value="Ilham Pangestu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Alamat Email</label>
                        <input type="email" class="form-control" required placeholder="email@domain.com" value="ilham@unpam.ac.id">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Metode Pembayaran</label>
                        <select class="form-select" required>
                            <option value="qris">QRIS (Gopay / OVO / Dana / ShopeePay)</option>
                            <option value="va_bca">BCA Virtual Account</option>
                            <option value="va_mandiri">Mandiri Virtual Account</option>
                            <option value="va_bri">BRI Virtual Account</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning fw-bold py-2 rounded-3">
                            <i class="bi bi-check-circle me-1"></i> Konfirmasi & Mulai Belajar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

