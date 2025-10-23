<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

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