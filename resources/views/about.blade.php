@extends('layouts.app')

@section('title', 'Identitas Mahasiswa & Informasi UTS')

@section('content')
<div class="container mb-5">
    <div class="row g-4 justify-content-center">
        <!-- KARTU IDENTITAS MAHASISWA -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                <div class="card-header bg-primary text-white py-3 px-4 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-mortarboard-fill me-2 text-warning"></i>Identitas Mahasiswa Peserta UTS
                    </h5>
                    <span class="badge bg-warning text-dark fw-bold">Digit NIM: 8</span>
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center g-4 mb-4">
                        <div class="col-md-3 text-center">
                            <div class="bg-light rounded-circle p-3 d-inline-block shadow-sm border border-2 border-primary">
                                <img src="{{ asset('assets/images/logo-unpam.svg') }}" alt="UNPAM" width="90" height="90">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3 class="fw-bold text-dark mb-1">Ilham Pangestu</h3>
                            <p class="text-primary fw-semibold mb-2 fs-5">NIM: 251011700008</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary">Kelas: 03SIFE003</span>
                                <span class="badge bg-dark">Sistem Informasi S-1</span>
                                <span class="badge bg-info text-dark">Semester Ganjil 2026/2027</span>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-secondary" style="width: 200px;">Mata Kuliah</th>
                                    <td class="fw-bold">Rekayasa Web</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Dosen Pengampu</th>
                                    <td class="fw-bold text-primary">Afif Efendi, M.Kom.</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Tema Proyek</th>
                                    <td><span class="badge bg-primary">Platform Belajar Online</span> (Digit NIM Terakhir: 8)</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Nama Tabel Database</th>
                                    <td><code>courses</code></td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Nama Database</th>
                                    <td><code>db_uts_251011700008</code></td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Kolom Tabel</th>
                                    <td><code>id, title, instructor, duration, image, price, category, description, timestamps</code></td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-secondary">Framework & Teknologi</th>
                                    <td>Laravel 11/12, PHP 8.4, MySQL (Docker), Blade Template, Bootstrap 5.3 (Asset Lokal)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CHECKLIST KELENGKAPAN SESUAI SOAL -->
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                <div class="card-header bg-dark text-white py-3 px-4">
                    <h6 class="mb-0 fw-bold">
                        <i class="bi bi-clipboard-check-fill text-success me-2"></i>Status Pemenuhan Ketentuan UTS
                    </h6>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Tema Berdasarkan 1 Digit NIM Terakhir</strong>
                                <div class="small text-muted">Digit NIM 8 = Tema Platform Belajar Online (Tabel: <code>courses</code>).</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Migration & Seeder Sesuai Struktur Tabel</strong>
                                <div class="small text-muted">Database <code>db_uts_251011700008</code> dengan seeder 8 data kursus realistis.</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Penyimpanan Gambar di <code>public/assets/images/</code></strong>
                                <div class="small text-muted">Semua gambar thumbnail & logo disimpan lokal di folder publik dan ditampilkan di view.</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Asset Bootstrap Lokal di <code>public/Bootstrap</code></strong>
                                <div class="small text-muted">Bootstrap CSS & JS diunduh langsung ke <code>public/Bootstrap/css</code> dan <code>public/Bootstrap/js</code>.</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Blade Template Layout (<code>@@extends</code>, <code>@@section</code>)</strong>
                                <div class="small text-muted">Layout modular utama di <code>resources/views/layouts/app.blade.php</code> menghindari perulangan kode.</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Halaman Daftar Produk & Detail Produk</strong>
                                <div class="small text-muted">Halaman katalog card grid, tabel interaktif, dan halaman detail produk dengan breadcrumbs.</div>
                            </div>
                            <span class="badge bg-success">Terpenuhi</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- STATISTIK APLIKASI -->
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white">
                        <div class="text-primary fs-2 fw-bold">{{ $totalCourses }}</div>
                        <div class="text-muted small">Total Kursus</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white">
                        <div class="text-success fs-2 fw-bold">{{ $categoriesCount }}</div>
                        <div class="text-muted small">Kategori Materi</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white">
                        <div class="text-warning fs-2 fw-bold">Rp {{ number_format($averagePrice, 0, ',', '.') }}</div>
                        <div class="text-muted small">Rata-rata Harga</div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('courses.index') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Katalog Kursus
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
