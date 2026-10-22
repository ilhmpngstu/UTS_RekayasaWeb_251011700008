<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - UTS Rekayasa Web
| Mahasiswa : Ilham Pangestu
| NIM       : 251011700008
| Kelas     : 03SIFE003
| Tema      : Platform Belajar Online (courses)
|--------------------------------------------------------------------------
*/

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/table', [CourseController::class, 'table'])->name('courses.table');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/about', [CourseController::class, 'about'])->name('about');
