<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Auth::routes();

Route::middleware('isAdministrator')->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/jenis_hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis_hewan.index');
    Route::get('/admin/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');
});

Route::middleware('isResepsionis')->group(function () {
    Route::get('/respsionis/dashboard', [App\Http\Controllers\Resepsionis\DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');
});

Route::get('/struktur', [SiteController::class, 'struktur']);
Route::get('/layanan', [SiteController::class, 'layanan']);
Route::get('/kontak', [SiteController::class, 'kontak']);

// Login
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::post('/login', [SiteController::class, 'authenticate'])->name('login.authenticate');

// Dashboard & halaman yang membutuhkan login (cek session manual)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Data
Route::get('/data', [DataController::class, 'index'])->name('data.index');

// Logout
Route::get('/logout', function(\Illuminate\Http\Request $request) {
    $request->session()->forget('user'); // hapus session manual
    return redirect('/login');
})->name('logout');


