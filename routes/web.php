<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\DataController;

Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

// Landing page
Route::get('/', function () {
    return view('landing.index');
})->name('landing');

// Halaman utama
Route::get('/', [SiteController::class, 'landing'])->name('landing');
Route::get('/home', [SiteController::class, 'home'])->name('home');
Route::get('/struktur', [SiteController::class, 'struktur']);
Route::get('/layanan', [SiteController::class, 'layanan']);
Route::get('/kontak', [SiteController::class, 'kontak']);
Route::get('/login', [SiteController::class, 'login']);

Route::get('/admin/jenis-hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
Route::get('/admin/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');

Route::get('/data', [DataController::class, 'index'])->name('data.index');
