@extends('layouts.app')

@section('title', 'Katalog Kursus Online - EduLearn')

@section('content')
<div class="container">

    <!-- BAR FILTER, PENCARIAN & STATISTIK -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <form action="{{ route('courses.index') }}" method="GET" class="row g-3 align-items-center">
                <!-- Kolom Input Pencarian -->
                <div class="col-lg-5 col-md-6">
                    <label for="search" class="form-label small fw-semibold text-secondary mb-1">
                        <i class="bi bi-search me-1 text-primary"></i> Cari Kursus / Instruktur
                    </label>
                    <div class="input-group">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Contoh: Laravel, Python, UI/UX..." value="{{ request('search') }}">
                        @if(request('search'))
                            <a href="{{ route('courses.index', array_filter(['category' => request('category'), 'sort' => request('sort')])) }}" class="btn btn-outline-secondary" title="Hapus pencarian">
                                <i class="bi bi-x-lg"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Filter Kategori -->
                <div class="col-lg-3 col-md-6">
                    <label for="category" class="form-label small fw-semibold text-secondary mb-1">
                        <i class="bi bi-funnel me-1 text-primary"></i> Kategori
                    </label>
                    <select name="category" id="category" class="form-select" onchange="this.form.submit()">
                        <option value="">Semua Kategori ({{ $categories->count() }})</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                {{ $cat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Pengurutan (Sorting) -->
                <div class="col-lg-3 col-md-6">
                    <label for="sort" class="form-label small fw-semibold text-secondary mb-1">
                        <i class="bi bi-sort-down me-1 text-primary"></i> Urutkan Berdasarkan
                    </label>
                    <select name="sort" id="sort" class="form-select" onchange="this.form.submit()">
                        <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Urutan Bawaan</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Harga: Terendah &rarr; Tertinggi</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Harga: Tertinggi &rarr; Terendah</option>
                        <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Judul (A - Z)</option>
                    </select>
                </div>

                <!-- Tombol Submit & Reset -->
                <div class="col-lg-1 col-md-6 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-arrow-repeat"></i>
                    </button>
                </div>
            </form>

            <!-- Quick Category Badges -->
            <div class="d-flex flex-wrap gap-2 mt-3 pt-3 border-top">
                <span class="text-secondary small align-self-center me-1">Kategori Populer:</span>
                <a href="{{ route('courses.index') }}" class="badge rounded-pill text-decoration-none {{ !request('category') ? 'bg-primary text-white' : 'bg-light text-dark border' }} px-3 py-2">
                    Semua
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('courses.index', ['category' => $cat]) }}" class="badge rounded-pill text-decoration-none {{ request('category') == $cat ? 'bg-primary text-white' : 'bg-light text-dark border' }} px-3 py-2">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- HEADER DAFTAR KURSUS & SWITCH VIEW -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div>
            <h4 class="fw-bold mb-0 text-dark">
                <i class="bi bi-collection-play-fill text-primary me-2"></i>Daftar Kursus Tersedia
            </h4>
            <p class="text-muted small mb-0">
                Menampilkan <strong>{{ $courses->count() }}</strong> materi pembelajaran interaktif
                @if(request('category')) untuk kategori <strong>{{ request('category') }}</strong>@endif
                @if(request('search')) dengan kata kunci "<strong>{{ request('search') }}</strong>"@endif
            </p>
        </div>

        <div class="btn-group shadow-sm mt-2 mt-md-0" role="group">
            <a href="{{ route('courses.index', request()->query()) }}" class="btn btn-sm btn-primary active">
                <i class="bi bi-grid-fill me-1"></i> Card Grid
            </a>
            <a href="{{ route('courses.table', request()->query()) }}" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-table me-1"></i> Tabel Data
            </a>
        </div>
    </div>

    <!-- GRID CARD DAFTAR KURSUS -->
    @if($courses->count() > 0)
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
            @foreach($courses as $course)
                <div class="col">
                    <div class="card h-100 course-card">
                        <!-- Gambar Cover Kursus (dari public/assets/images/) -->
                        <div class="course-img-wrapper">
                            <img src="{{ $course->image_url }}" alt="{{ $course->title }}" loading="lazy">
                            <span class="position-absolute top-0 end-0 m-2 badge bg-dark bg-opacity-75 rounded-pill px-2 py-1 small">
                                <i class="bi bi-clock-history me-1 text-warning"></i>{{ $course->duration }}
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body d-flex flex-column p-3">
                            <div class="mb-2">
                                <span class="badge-category">
                                    {{ $course->category }}
                                </span>
                            </div>

                            <h6 class="card-title fw-bold text-dark mb-2" style="line-height: 1.35; min-height: 2.7em;">
                                <a href="{{ route('courses.show', $course->id) }}" class="text-decoration-none text-dark hover-primary">
                                    {{ $course->title }}
                                </a>
                            </h6>

                            <div class="text-secondary small mb-3">
                                <i class="bi bi-person-circle me-1 text-primary"></i>{{ $course->instructor }}
                            </div>

                            <div class="mt-auto pt-2 border-top">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted small">Investasi:</span>
                                    <span class="price-tag text-primary">{{ $course->formatted_price }}</span>
                                </div>

                                <div class="d-grid gap-2">
                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-primary btn-sm rounded-3">
                                        <i class="bi bi-info-circle me-1"></i> Lihat Detail
                                    </a>
                                    <button type="button" class="btn btn-warning btn-sm rounded-3 fw-semibold" data-bs-toggle="modal" data-bs-target="#enrollModal" data-course-title="{{ $course->title }}" data-course-price="{{ $course->formatted_price }}">
                                        <i class="bi bi-bag-check me-1"></i> Daftar Kursus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- State Kosong / Tidak Ada Data -->
        <div class="card border-0 shadow-sm rounded-4 p-5 text-center my-4">
            <div class="py-4">
                <i class="bi bi-search text-muted" style="font-size: 3.5rem;"></i>
                <h5 class="fw-bold mt-3 mb-2">Tidak Ada Kursus yang Sesuai</h5>
                <p class="text-muted mb-3">
                    Kami tidak menemukan kursus dengan kriteria pencarian atau kategori yang Anda pilih.
                </p>
                <a href="{{ route('courses.index') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                    <i class="bi bi-arrow-clockwise me-1"></i> Reset Pencarian & Tampilkan Semua
                </a>
            </div>
        </div>
    @endif

</div>

<!-- MODAL DAFTAR KURSUS (BOOTSTRAP INTERAKTIF) -->
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
                    <i class="bi bi-info-circle-fill me-1"></i> Pembelajaran online dengan akses seumur hidup & sertifikat.
                </div>
                <h6 class="fw-bold mb-1" id="modalCourseTitle">Judul Kursus</h6>
                <div class="text-primary fw-bold fs-5 mb-3" id="modalCoursePrice">Rp 0</div>

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

@push('scripts')
<script>
    // Event listener untuk pass data kursus ke modal pendaftaran
    const enrollModal = document.getElementById('enrollModal');
    if (enrollModal) {
        enrollModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const title = button.getAttribute('data-course-title');
            const price = button.getAttribute('data-course-price');

            document.getElementById('modalCourseTitle').textContent = title;
            document.getElementById('modalCoursePrice').textContent = price;
        });
    }
</script>
@endpush
