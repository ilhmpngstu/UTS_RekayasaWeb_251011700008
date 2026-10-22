<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\SimpleType\Jc;
use PhpOffice\PhpWord\SimpleType\JcTable;

$phpWord = new PhpWord();

// Define Styles
$phpWord->addTitleStyle(1, ['bold' => true, 'size' => 18, 'color' => '003366', 'name' => 'Calibri'], ['spaceAfter' => 240]);
$phpWord->addTitleStyle(2, ['bold' => true, 'size' => 14, 'color' => '003366', 'name' => 'Calibri'], ['spaceBefore' => 240, 'spaceAfter' => 120]);
$phpWord->addTitleStyle(3, ['bold' => true, 'size' => 12, 'color' => '1E293B', 'name' => 'Calibri'], ['spaceBefore' => 180, 'spaceAfter' => 80]);

$fontStyleBody = ['size' => 11, 'name' => 'Calibri', 'color' => '333333'];
$fontStyleBold = ['bold' => true, 'size' => 11, 'name' => 'Calibri', 'color' => '111111'];
$fontStyleSubtitle = ['italic' => true, 'size' => 10, 'name' => 'Calibri', 'color' => '666666'];

$paragraphStyleCenter = ['alignment' => Jc::CENTER, 'spaceAfter' => 120];
$paragraphStyleJustify = ['alignment' => Jc::BOTH, 'spaceAfter' => 120, 'lineHeight' => 1.15];

// Section
$section = $phpWord->addSection([
    'marginTop' => 1200,
    'marginBottom' => 1200,
    'marginLeft' => 1400,
    'marginRight' => 1400,
]);

// HEADER KAMPUS
$section->addText('YAYASAN SASMITA JAYA', ['bold' => true, 'size' => 13, 'name' => 'Calibri'], $paragraphStyleCenter);
$section->addText('UNIVERSITAS PAMULANG', ['bold' => true, 'size' => 16, 'color' => '003366', 'name' => 'Calibri'], $paragraphStyleCenter);
$section->addText('FAKULTAS ILMU KOMPUTER - PROGRAM STUDI SISTEM INFORMASI S-1', ['bold' => true, 'size' => 10, 'color' => '555555', 'name' => 'Calibri'], $paragraphStyleCenter);
$section->addText('Jl. Puspitek Raya No. 10, Serpong - Tangerang Selatan | www.unpam.ac.id', ['size' => 9, 'color' => '777777', 'name' => 'Calibri'], $paragraphStyleCenter);
$section->addLine(['weight' => 2, 'width' => 480, 'height' => 0, 'color' => '003366']);

$section->addTextBreak(1);

// JUDUL DOKUMENTASI
$section->addText('LAPORAN DOKUMENTASI HASIL APLIKASI WEB', ['bold' => true, 'size' => 15, 'color' => '003366', 'name' => 'Calibri'], $paragraphStyleCenter);
$section->addText('UJIAN TENGAH SEMESTER (UTS) SEMESTER GANJIL T.A. 2026/2027', ['bold' => true, 'size' => 12, 'name' => 'Calibri'], $paragraphStyleCenter);

$section->addTextBreak(1);

// TABEL IDENTITAS
$section->addTitle('A. Identitas Mahasiswa & Penugasan', 2);

$tableStyle = [
    'borderSize' => 6,
    'borderColor' => 'CCCCCC',
    'cellMargin' => 80,
    'alignment' => JcTable::CENTER,
];
$phpWord->addTableStyle('IdentityTable', $tableStyle);
$table = $section->addTable('IdentityTable');

$rows = [
    ['Nama Lengkap', 'Ilham Pangestu'],
    ['Nomor Induk Mahasiswa (NIM)', '251011700008'],
    ['1 Digit Terakhir NIM', '8'],
    ['Kelas', '03SIFE003'],
    ['Program Studi', 'Sistem Informasi S-1'],
    ['Fakultas', 'Ilmu Komputer'],
    ['Mata Kuliah', 'Rekayasa Web'],
    ['Dosen Pengampu', 'Afif Efendi, M.Kom.'],
    ['Tema Proyek (Sesuai Digit NIM 8)', 'Platform Belajar Online'],
    ['Nama Tabel Database', 'courses'],
    ['Nama Database', 'db_uts_251011700008'],
    ['Framework & Versi', 'Laravel 11 / 12, PHP 8.4, Bootstrap 5.3 (Lokal)'],
    ['Web Server / Database Engine', 'MySQL 8.4 (Docker)'],
];

foreach ($rows as $r) {
    $table->addRow();
    $cell1 = $table->addCell(3000, ['bgColor' => 'F1F5F9']);
    $cell1->addText($r[0], $fontStyleBold);
    $cell2 = $table->addCell(5200);
    $cell2->addText($r[1], $fontStyleBody);
}

$section->addTextBreak(1);

// B. LINK GITHUB
$section->addTitle('B. Tautan Repositori GitHub', 2);
$section->addText('Sesuai ketentuan soal pada Poin D.10 ("Upload source code ke GitHub dengan nama project UTS_NAMA_NIM_KODEKELAS"), berikut adalah informasi repositori proyek:', $fontStyleBody, $paragraphStyleJustify);

$tableGit = $section->addTable('IdentityTable');
$tableGit->addRow();
$tableGit->addCell(3000, ['bgColor' => 'F1F5F9'])->addText('Nama Repositori', $fontStyleBold);
$tableGit->addCell(5200)->addText('UTS_RekayasaWeb_251011700008', ['bold' => true, 'color' => '003366']);

$tableGit->addRow();
$tableGit->addCell(3000, ['bgColor' => 'F1F5F9'])->addText('Link URL GitHub', $fontStyleBold);
$tableGit->addCell(5200)->addText('https://github.com/ilhmpngstu/UTS_RekayasaWeb_251011700008', ['color' => '0D6EFD', 'underline' => 'single']);

$section->addTextBreak(1);

// C. STRUKTUR DATABASE
$section->addTitle('C. Struktur Tabel Database (`courses`)', 2);
$section->addText('Tabel courses dibuat menggunakan migration Laravel dan diisi dengan data dummy realistis melalui seeder (Database: `db_uts_251011700008`):', $fontStyleBody, $paragraphStyleJustify);

$tableCols = $section->addTable('IdentityTable');
$headerCell = ['bgColor' => '003366'];
$headerFont = ['bold' => true, 'color' => 'FFFFFF', 'name' => 'Calibri'];

$tableCols->addRow();
$tableCols->addCell(800, $headerCell)->addText('No', $headerFont);
$tableCols->addCell(2000, $headerCell)->addText('Nama Kolom', $headerFont);
$tableCols->addCell(2200, $headerCell)->addText('Tipe Data', $headerFont);
$tableCols->addCell(3200, $headerCell)->addText('Keterangan', $headerFont);

$columns = [
    [1, 'id', 'BIGINT AUTO_INCREMENT', 'Primary Key'],
    [2, 'title', 'VARCHAR(255)', 'Judul kursus online'],
    [3, 'instructor', 'VARCHAR(255)', 'Nama instruktur kursus'],
    [4, 'duration', 'VARCHAR(255)', 'Durasi materi (misal: "24 Jam Video")'],
    [5, 'image', 'VARCHAR(255)', 'Nama file di public/assets/images/'],
    [6, 'price', 'DECIMAL(12, 2)', 'Harga kursus dalam Rupiah'],
    [7, 'category', 'VARCHAR(255)', 'Kategori materi kursus'],
    [8, 'description', 'TEXT (Nullable)', 'Deskripsi lengkap silabus kursus'],
    [9, 'created_at', 'TIMESTAMP', 'Waktu pembuatan data'],
    [10, 'updated_at', 'TIMESTAMP', 'Waktu perbaruan data'],
];

foreach ($columns as $col) {
    $tableCols->addRow();
    $tableCols->addCell(800)->addText($col[0], $fontStyleBody);
    $tableCols->addCell(2000)->addText($col[1], $fontStyleBold);
    $tableCols->addCell(2200)->addText($col[2], $fontStyleBody);
    $tableCols->addCell(3200)->addText($col[3], $fontStyleBody);
}

// PAGE BREAK UNTUK SCREENSHOT
$section->addPageBreak();

// D. SCREENSHOT HASIL APLIKASI
$section->addTitle('D. Screenshot Hasil Implementasi Aplikasi Web', 2);
$section->addText('Berikut adalah tangkapan layar tampilan antarmuka web yang dibangun dengan framework Laravel, Blade Template, dan Bootstrap 5:', $fontStyleBody, $paragraphStyleJustify);

// Screenshot 1: Katalog Card Grid
$section->addTitle('1. Halaman Katalog Kursus (Card Grid & Header Banner UNPAM)', 3);
$section->addText('Menampilkan header resmi Yayasan Sasmita Jaya dan UNPAM, identitas mahasiswa, fitur filter kategori, pencarian, dan daftar kartu kursus responsif.', $fontStyleSubtitle);
$img1 = __DIR__ . '/../../docs/screenshots/01_halaman_katalog_grid.png';
if (file_exists($img1)) {
    $section->addImage($img1, ['width' => 470, 'height' => 376, 'alignment' => Jc::CENTER]);
}

$section->addTextBreak(1);

// Screenshot 2: Tabel Data
$section->addTitle('2. Halaman Tampilan Tabel Data Kursus (`table` Bootstrap)', 3);
$section->addText('Menampilkan data tabel courses menggunakan komponen Bootstrap table table-hover table-striped lengkap dengan thumbnail, kategori badge, harga, dan tombol detail.', $fontStyleSubtitle);
$img2 = __DIR__ . '/../../docs/screenshots/02_halaman_tabel_data.png';
if (file_exists($img2)) {
    $section->addImage($img2, ['width' => 470, 'height' => 376, 'alignment' => Jc::CENTER]);
}

$section->addPageBreak();

// Screenshot 3: Detail Kursus
$section->addTitle('3. Halaman Detail Kursus (Show View)', 3);
$section->addText('Menampilkan rincian materi lengkap, breadcrumb navigasi, profil instruktur, silabus modul pembelajaran (Accordion Bootstrap), fasilitas, serta modal pendaftaran.', $fontStyleSubtitle);
$img3 = __DIR__ . '/../../docs/screenshots/03_halaman_detail_kursus.png';
if (file_exists($img3)) {
    $section->addImage($img3, ['width' => 470, 'height' => 376, 'alignment' => Jc::CENTER]);
}

$section->addTextBreak(1);

// Screenshot 4: Halaman Identitas Mahasiswa UTS
$section->addTitle('4. Halaman Identitas Mahasiswa & Informasi Penugasan UTS', 3);
$section->addText('Menampilkan identitas lengkap mahasiswa pengembang, rincian teknis penugasan UTS, checklist pemenuhan seluruh butir soal, dan ringkasan statistik database.', $fontStyleSubtitle);
$img4 = __DIR__ . '/../../docs/screenshots/04_halaman_identitas_uts.png';
if (file_exists($img4)) {
    $section->addImage($img4, ['width' => 470, 'height' => 376, 'alignment' => Jc::CENTER]);
}

$section->addTextBreak(1);

// E. KESIMPULAN
$section->addTitle('E. Kesimpulan', 2);
$section->addText('Seluruh instruksi dan ketentuan pada soal Ujian Tengah Semester (UTS) mata kuliah Rekayasa Web telah berhasil diimplementasikan dengan baik:', $fontStyleBody, $paragraphStyleJustify);
$section->addListItem('Proyek dibuat menggunakan framework Laravel dengan arsitektur MVC terstruktur.', 0, $fontStyleBody);
$section->addListItem('Tabel courses dan database db_uts_251011700008 berhasil dimigrasikan serta diisi data dummy realistis via Seeder.', 0, $fontStyleBody);
$section->addListItem('Asset Bootstrap 5.3 dan gambar thumbnail tersimpan secara mandiri di folder public aplikasi.', 0, $fontStyleBody);
$section->addListItem('Layout utama Blade Template berhasil diterapkan dengan rapi menggunakan @extends dan @section tanpa perulangan kode.', 0, $fontStyleBody);
$section->addListItem('Tampilan katalog Card Grid, Tampilan Tabel, Halaman Detail Kursus, serta navigasi antar halaman berfungsi dengan lancar dan responsif.', 0, $fontStyleBody);

$outputFile = __DIR__ . '/../../docs/UTS_RekayasaWeb_IlhamPangestu_251011700008.docx';
$objWriter = IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($outputFile);

echo "Word Document generated at: " . $outputFile . PHP_EOL;

