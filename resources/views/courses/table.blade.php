@extends('layouts.app')

@section('title', 'Data Tabel Kursus - EduLearn')

@section('content')
<div class="container">

    <!-- HEADER & SWITCH VIEW -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1 text-dark">
                <i class="bi bi-table text-primary me-2"></i>Data Tabel Kursus Online
            </h4>
            <p class="text-muted small mb-0">
                Penyajian data produk menggunakan komponen <code>table</code> Bootstrap sesuai ketentuan soal UTS poin 8.
            </p>
        </div>

        <div class="btn-group shadow-sm mt-3 mt-md-0" role="group">
            <a href="{{ route('courses.index') }}" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-grid-fill me-1"></i> Card Grid
            </a>
            <a href="{{ route('courses.table') }}" class="btn btn-sm btn-primary active">
                <i class="bi bi-table me-1"></i> Tabel Data
            </a>
        </div>
    </div>

    <!-- PENCARIAN & FILTER TABEL -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-3">
            <form action="{{ route('courses.table') }}" method="GET" class="row g-2 align-items-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" class="form-control border-start-0" placeholder="Filter judul, instruktur, atau kategori..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="category" class="form-select" onchange="this.form.submit()">
                        <option value="">Semua Kategori ({{ $categories->count() }})</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-filter me-1"></i> Filter
                    </button>
                    @if(request('search') || request('category'))
                        <a href="{{ route('courses.table') }}" class="btn btn-outline-secondary" title="Reset filter">
                            <i class="bi bi-arrow-clockwise"></i>
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <!-- TABEL BOOTSTRAP -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
        <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
            <h6 class="mb-0 fw-bold text-dark">
                <i class="bi bi-database-check me-2 text-success"></i>Tabel: <code>courses</code> (Total: {{ $courses->count() }} Data)
            </h6>
            <span class="badge bg-secondary">db_uts_251011700008</span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle mb-0">
                <thead class="table-dark text-nowrap">
                    <tr>
                        <th scope="col" class="text-center" style="width: 60px;">ID</th>
                        <th scope="col" style="width: 110px;">Thumbnail</th>
                        <th scope="col">Judul Kursus (title)</th>
                        <th scope="col">Instruktur (instructor)</th>
                        <th scope="col">Kategori (category)</th>
                        <th scope="col">Durasi (duration)</th>
                        <th scope="col" class="text-end">Harga (price)</th>
                        <th scope="col" class="text-center" style="width: 140px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <!-- ID -->
                            <td class="text-center fw-bold text-secondary">{{ $course->id }}</td>

                            <!-- Thumbnail Image -->
                            <td>
                                <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="rounded shadow-sm" style="width: 90px; height: 55px; object-fit: cover;">
                            </td>

                            <!-- Title -->
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="text-decoration-none fw-bold text-dark hover-primary d-block">
                                    {{ $course->title }}
                                </a>
                                <small class="text-muted d-block text-truncate" style="max-width: 320px;">
                                    {{ $course->description }}
                                </small>
                            </td>

                            <!-- Instructor -->
                            <td class="text-nowrap">
                                <i class="bi bi-person-badge-fill text-primary me-1"></i>
                                {{ $course->instructor }}
                            </td>

                            <!-- Category -->
                            <td>
                                <span class="badge-category text-nowrap">
                                    {{ $course->category }}
                                </span>
                            </td>

                            <!-- Duration -->
                            <td class="text-nowrap">
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-clock me-1 text-warning"></i>{{ $course->duration }}
                                </span>
                            </td>

                            <!-- Price -->
                            <td class="text-end fw-bold text-primary text-nowrap">
                                {{ $course->formatted_price }}
                            </td>

                            <!-- Actions -->
                            <td class="text-center text-nowrap">
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                    <i class="bi bi-eye-fill me-1"></i> Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-5 text-muted">
                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                Belum ada data kursus yang sesuai.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-light py-3 text-muted small text-center text-md-between d-md-flex justify-content-between align-items-center">
            <span>Struktur Tabel: <code>courses (id, title, instructor, duration, image, price, category, description)</code></span>
            <span>Status Seeder: <span class="badge bg-success">Berhasil Diisi</span></span>
        </div>
    </div>

</div>
@endsection

