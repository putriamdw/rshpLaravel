<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\isAdministrator;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Middleware\isResepsionis;
use App\Http\Controllers\Resepsionis\DashboardResepsionisController;
use App\Http\Middleware\isDokter;
use App\Http\Controllers\Dokter\DashboardDokterController;
use App\Http\Middleware\isPerawat;
use App\Http\Controllers\Perawat\DashboardPerawatController;
use App\Http\Middleware\isPemilik;
use App\Http\Controllers\Pemilik\DashboardPemilikController;

// ROUTE HALAMAN DEPAN (Dapat diakses tanpa login)
Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');
Route::get('/', [SiteController::class, 'index'])->name('landing.index');
Route::get('/home', [SiteController::class, 'home'])->name('site.home');
Route::get('/struktur', [SiteController::class, 'struktur'])->name('site.struktur');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('site.layanan');
Route::get('/kontak', [SiteController::class, 'kontak'])->name('site.kontak');

// AUTHENTICATION (LOGIN, REGISTER, dll)
Auth::routes();

// ROUTE YANG HANYA BISA DIAKSES SETELAH LOGIN
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/dokter/dashboard', fn() => view('dokter.dashboard'))->name('dokter.dashboard');
    Route::get('/perawat/dashboard', fn() => view('perawat.dashboard'))->name('perawat.dashboard');
    Route::get('/resepsionis/dashboard', fn() => view('resepsionis.dashboard'))->name('resepsionis.dashboard');
    Route::get('/pemilik/dashboard', fn() => view('pemilik.dashboard'))->name('pemilik.dashboard');

    // DASHBOARD UMUM (menyesuaikan role user)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ROUTE ADMINISTRATOR
    Route::middleware('isAdministrator')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
        Route::get('/jenis_hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('jenis_hewan.index');
        Route::get('/jenis_hewan/create', [App\Http\Controllers\Admin\JenisHewanController::class, 'create'])->name('jenis_hewan.create');
        Route::get('/jenis_hewan/store', [App\Http\Controllers\Admin\JenisHewanController::class, 'store'])->name('jenis_hewan.store');
        Route::get('/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('pemilik.index');
        Route::get('/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori_klinis', [App\Http\Controllers\Admin\KategoriKlinisController::class, 'index'])->name('kategori_klinis.index');
        Route::get('/kode_tindakan_terapi', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('kode_tindakan_terapi.index');
        Route::get('/pet', [App\Http\Controllers\Admin\PetController::class, 'index'])->name('pet.index');
        Route::get('/ras_hewan', [App\Http\Controllers\Admin\RasHewanController::class, 'index'])->name('ras_hewan.index');
        Route::get('/role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('role.index');
        Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
        Route::get('/pendaftaran', [App\Http\Controllers\Admin\PendaftaranController::class, 'index'])->name('pendaftaran.index');
        Route::get('/rekam_medis', [App\Http\Controllers\Admin\RekamMedisController::class, 'index'])->name('rekam_medis.index');
    });

    // ROUTE RESEPSIONIS
    Route::middleware([isResepsionis::class])->prefix('resepsionis')->name('resepsionis.')->group(function () {
        Route::get('/dashboard', [DashboardResepsionisController::class, 'index'])->name('dashboard');
        Route::get('/pendaftaran', [App\Http\Controllers\Admin\PendaftaranController::class, 'index'])->name('pendaftaran.index');
    });

    // ROUTE DOKTER
    Route::middleware([isDokter::class])->prefix('dokter')->name('dokter.')->group(function () {
        Route::get('/dashboard', [DashboardDokterController::class, 'index'])->name('dashboard');
        Route::get('/rekam_medis', [App\Http\Controllers\Admin\RekamMedisController::class, 'index'])->name('rekam_medis.index');
        Route::get('/kode_tindakan_terapi', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('kode_tindakan_terapi.index');
    });

    // ROUTE PERAWAT
    Route::middleware(isPerawat::class)->prefix('perawat')->name('perawat.')->group(function () {
        Route::get('/dashboard', [DashboardPerawatController::class, 'index'])->name('dashboard');
        Route::get('/kode_tindakan_terapi', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('kode_tindakan_terapi.index');
    });

    // ROUTE PEMILIK
    Route::middleware(isPemilik::class)->prefix('pemilik')->name('pemilik.')->group(function () {
        Route::get('/dashboard', [DashboardPemilikController::class, 'index'])->name('dashboard');
        Route::get('/pet', [App\Http\Controllers\Admin\PetController::class, 'index'])->name('pet.index');
    });

    // LOGOUT
    Route::get('/logout', function (\Illuminate\Http\Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});
