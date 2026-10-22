# UTS Rekayasa Web - Platform Belajar Online (EduLearn)

> **Ujian Tengah Semester (UTS) Semester Ganjil T.A. 2026/2027**  
> **Program Studi Sistem Informasi S-1, Fakultas Ilmu Komputer**  
> **Universitas Pamulang (UNPAM)**

---

## 👤 Identitas Mahasiswa

| Keterangan | Detail |
| :--- | :--- |
| **Nama Lengkap** | Ilham Pangestu |
| **NIM** | 251011700008 |
| **Digit Terakhir NIM** | **8** |
| **Kelas** | 03SIFE003 |
| **Mata Kuliah** | Rekayasa Web |
| **Dosen Pengampu** | Afif Efendi, M.Kom. |
| **Tema Proyek** | **Platform Belajar Online** (Sesuai Digit NIM: 8) |
| **Nama Tabel** | `courses` |
| **Nama Database** | `db_uts_251011700008` |
| **Nama Repositori** | `UTS_ILHAMPANGESTU_251011700008_03SIFE003` |

---

## 🛠️ Tech Stack & Alat Pengembangan

- **Framework**: [Laravel 11/12](https://laravel.com) (PHP 8.4)
- **Frontend / UI**: Blade Templating & [Bootstrap 5.3](https://getbootstrap.com) (Asset Lokal di `public/Bootstrap`)
- **Database Server**: MySQL 8.4 (Docker Container)
- **Icons**: Bootstrap Icons (Asset Lokal di `public/bootstrap-icons`)
- **Web Server / Tooling**: Laravel Herd, Composer, Docker Desktop

---

## 📋 Struktur Tabel `courses`

Sesuai ketentuan soal untuk tema digit ke-8:

| No | Nama Kolom | Tipe Data | Keterangan |
| :---: | :--- | :--- | :--- |
| 1 | `id` | BIGINT (Unsigned) | Primary Key (Auto Increment) |
| 2 | `title` | VARCHAR(255) | Judul kursus / materi pembelajaran |
| 3 | `instructor` | VARCHAR(255) | Nama instruktur / pengajar kursus |
| 4 | `duration` | VARCHAR(255) | Durasi kursus (misal: "24 Jam Video") |
| 5 | `image` | VARCHAR(255) | Nama file gambar di `public/assets/images/` |
| 6 | `price` | DECIMAL(12, 2) | Harga investasi kursus (Rupiah) |
| 7 | `category` | VARCHAR(255) | Kategori kursus (Web Dev, AI, Design, dll) |
| 8 | `description` | TEXT (Nullable) | Deskripsi lengkap silabus kursus |
| 9 | `created_at` | TIMESTAMP | Waktu pembuatan data |
| 10 | `updated_at` | TIMESTAMP | Waktu modifikasi data |

---

## ✨ Fitur & Pemenuhan Soal UTS

1. ✅ **Header Banner Resmi Kampus**: Menampilkan logo Yayasan Sasmita Jaya, Universitas Pamulang, "Welcome To Platform Belajar Online", serta kartu identitas mahasiswa (NIM, Email, Prodi, Dosen Pengampu) persis sesuai contoh soal halaman 2.
2. ✅ **Asset Bootstrap Lokal**: CSS & JS Bootstrap disimpan secara mandiri di direktori `public/Bootstrap/css` dan `public/Bootstrap/js` (tidak bergantung penuh pada CDN internet).
3. ✅ **Blade Template Modular**: Layout utama di `resources/views/layouts/app.blade.php` menggunakan `@yield`, `@section`, dan `@extends`.
4. ✅ **Katalog Kursus (Card Grid View)**: Menampilkan kursus dalam grid responsif dengan cover gambar lokal, badge kategori, durasi, harga dalam Rupiah, tombol "Lihat Detail", dan tombol "Daftar Kursus".
5. ✅ **Tampilan Tabel Responsif (Table View)**: Menampilkan seluruh data tabel `courses` menggunakan komponen `table table-hover table-striped` Bootstrap.
6. ✅ **Pencarian, Filter Kategori & Sorting**: Fitur filter interaktif berdasarkan kata kunci pencarian, kategori kursus, serta pengurutan harga terendah/tertinggi.
7. ✅ **Halaman Detail Produk**: Menampilkan banner visual, deskripsi komprehensif, silabus pembelajaran (Bootstrap Accordion), instruktur profile, sidebar benefit, modal pendaftaran, dan daftar kursus terkait.
8. ✅ **Database Migration & Seeder**: Mengisi 8 data dummy realistis ke database `db_uts_251011700008`.
9. ✅ **Penyimpanan Asset Gambar**: Semua thumbnail dan logo tersimpan di `public/assets/images/`.

---

## 🚀 Panduan Menjalankan Proyek Secara Lokal

### 1. Clone Repositori
```bash
git clone https://github.com/ilhmpngstu/UTS_ILHAMPANGESTU_251011700008_03SIFE003.git
cd UTS_ILHAMPANGESTU_251011700008_03SIFE003
```

### 2. Instalasi Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` ke `.env`:
```bash
cp .env.example .env
php artisan key:generate
```

Pastikan konfigurasi database di file `.env` sudah sesuai:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_uts_251011700008
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Menjalankan Database MySQL (Menggunakan Docker)
Jika menggunakan Docker, jalankan container MySQL dengan perintah:
```bash
docker run --name uts-mysql -e MYSQL_DATABASE=db_uts_251011700008 -e MYSQL_ALLOW_EMPTY_PASSWORD=yes -p 3306:3306 -d mysql:8.4
```
*(Atau gunakan database MySQL bawaan XAMPP / Laragon dengan membuat database bernama `db_uts_251011700008`)*.

### 5. Menjalankan Migrasi dan Seeder
Eksekusi migrasi tabel dan seeding data dummy:
```bash
php artisan migrate --seed
```

### 6. Menjalankan Server Aplikasi
Jalankan development server Laravel:
```bash
php artisan serve
```
Buka browser dan akses aplikasi di:  
👉 **`http://localhost:8000`**

---

## 🧪 Menjalankan Automated Test
Aplikasi telah dilengkapi unit & feature test:
```bash
php artisan test
```

---

## 📁 Struktur Direktori Penting

```
├── app/
│   ├── Http/Controllers/CourseController.php  # Controller logika katalog, tabel & detail
│   └── Models/Course.php                     # Eloquent Model courses
├── database/
│   ├── migrations/*_create_courses_table.php # Migrasi struktur tabel courses
│   └── seeders/CourseSeeder.php              # Seeder data dummy courses
├── public/
│   ├── assets/images/                        # Direktori gambar produk & logo
│   └── Bootstrap/                            # Asset lokal CSS & JS Bootstrap
├── resources/views/
│   ├── layouts/app.blade.php                 # Layout utama & Header banner UNPAM
│   ├── courses/
│   │   ├── index.blade.php                   # Tampilan Grid Card katalog kursus
│   │   ├── table.blade.php                   # Tampilan Tabel data kursus
│   │   └── show.blade.php                    # Tampilan Detail materi kursus
│   └── about.blade.php                       # Halaman profil identitas mahasiswa UTS
└── routes/web.php                            # Definisi routing aplikasi web
```

---
Dibuat dengan dedikasi untuk memenuhi Ujian Tengah Semester (UTS) Rekayasa Web Universitas Pamulang.
