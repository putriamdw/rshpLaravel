<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Resepsionis\DashboardResepsionisController;

// =====================================================
// ROUTE HALAMAN DEPAN (Dapat diakses tanpa login)
// =====================================================
Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');
Route::get('/', [SiteController::class, 'index'])->name('landing.index');
Route::get('/home', [SiteController::class, 'home'])->name('site.home');
Route::get('/struktur', [SiteController::class, 'struktur'])->name('site.struktur');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('site.layanan');
Route::get('/kontak', [SiteController::class, 'kontak'])->name('site.kontak');

// =====================================================
// AUTHENTICATION (LOGIN, REGISTER, dll)
// =====================================================
Auth::routes();

// =====================================================
// ROUTE YANG HANYA BISA DIAKSES SETELAH LOGIN
// =====================================================
Route::middleware('auth')->group(function () {

    // DASHBOARD UMUM (menyesuaikan role user)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // =================================================
    // ROUTE ADMINISTRATOR
    // =================================================
    Route::middleware('isAdministrator')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
        Route::get('/jenis_hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('jenis_hewan.index');
        Route::get('/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('pemilik.index');
        Route::get('/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori_klinis', [App\Http\Controllers\Admin\KategoriKlinisController::class, 'index'])->name('kategori_klinis.index');
        Route::get('/kode_tindakan_terapi', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('kode_tindakan_terapi.index');
        Route::get('/pet', [App\Http\Controllers\Admin\PetController::class, 'index'])->name('pet.index');
        Route::get('/ras_hewan', [App\Http\Controllers\Admin\RasHewanController::class, 'index'])->name('ras_hewan.index');
        Route::get('/role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('role.index');
        Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
    });

    // =================================================
    // ROUTE RESEPSIONIS
    // =================================================
    Route::middleware('isResepsionis')->prefix('resepsionis')->name('resepsionis.')->group(function () {
        Route::get('/dashboard', [DashboardResepsionisController::class, 'index'])->name('dashboard');
    });

    // =================================================
    // LOGOUT
    // =================================================
    Route::get('/logout', function (\Illuminate\Http\Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});
