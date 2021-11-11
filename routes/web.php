<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\JnsKontenController;
use App\Http\Controllers\HashtagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Perintah Untuk Memanggil Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post-login', [LoginController::class, 'postlogin'])->name('post-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Perintah Untuk CRUD Hashtag
Route::get('/tambah-data-hashtag', [HashtagController::class, 'create'])->name('tambah-data-hashtag');
Route::post('/simpan-data-hashtag', [HashtagController::class, 'store'])->name('simpan-data-hashtag');
Route::get('/edit-data-hashtag/{id}', [HashtagController::class, 'edit'])->name('edit-data-hashtag');
Route::post('/update-data-hashtag/{id}', [HashtagController::class, 'update'])->name('update-data-hashtag');
Route::get('/delete-data-hashtag/{id}', [HashtagController::class, 'destroy'])->name('delete-data-hashtag');

// Perintah Untuk CRUD Jenis Konten
Route::get('/tambah-data-jenis-konten', [JnsKontenController::class, 'create'])->name('tambah-data-jenis-konten');
Route::post('/simpan-data-jenis-konten', [JnsKontenController::class, 'store'])->name('simpan-data-jenis-konten');
Route::get('/edit-data-jenis-konten/{id}', [JnsKontenController::class, 'edit'])->name('edit-data-jenis-konten');
Route::post('/update-data-jenis-konten/{id}', [JnsKontenController::class, 'update'])->name('update-data-jenis-konten');
Route::get('/delete-data-jenis-konten/{id}', [JnsKontenController::class, 'destroy'])->name('delete-data-jenis-konten');

// Perintah Untuk CRUD Platform
Route::get('/tambah-data-platform', [PlatformController::class, 'create'])->name('tambah-data-platform');
Route::post('/simpan-data-platform', [PlatformController::class, 'store'])->name('simpan-data-platform');
Route::get('/edit-data-platform/{id}', [PlatformController::class, 'edit'])->name('edit-data-platform');
Route::post('/update-data-platform/{id}', [PlatformController::class, 'update'])->name('update-data-platform');
Route::get('/delete-data-platform/{id}', [PlatformController::class, 'destroy'])->name('delete-data-platform');

// Perintah Untuk CRUD Schedule
Route::get('/tambah-data-schedule', [ScheduleController::class, 'create'])->name('tambah-data-schedule');
Route::post('/simpan-data-schedule', [ScheduleController::class, 'store'])->name('simpan-data-schedule');
Route::get('/edit-data-schedule/{id}', [ScheduleController::class, 'edit'])->name('edit-data-schedule');
Route::post('/update-data-schedule/{id}', [ScheduleController::class, 'update'])->name('update-data-schedule');
Route::get('/delete-data-schedule/{id}', [ScheduleController::class, 'destroy'])->name('delete-data-schedule');


Route::group(['middleware' => 'auth',['level:admin']], function () {
    // Middleware Auth Admin
        Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');
        Route::get('/data-schedule', [ScheduleController::class, 'index'])->name('data-schedule');
        Route::get('/data-platform', [PlatformController::class, 'index'])->name('data-platform');
        Route::get('/data-jenis-konten', [JnsKontenController::class, 'index'])->name('data-jenis-konten');
        Route::get('/data-hashtag', [HashtagController::class, 'index'])->name('data-hashtag');
        Route::get('/data-laporan', [LaporanController::class, 'index'])->name('data-laporan');
});

Route::group(['middleware' => 'auth',['level:sistem']], function () {
    // Middleware Auth User
        Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');
        Route::get('/data-schedule', [ScheduleController::class, 'index'])->name('data-schedule');
});
