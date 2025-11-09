<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    // =========================
    // Halaman utama (Landing)
    // =========================
    public function index()
    {
        return view('landing.index'); // halaman awal (belum login)
    }

    // =========================
    // Cek koneksi database
    // =========================
    public function cekKoneksi()
    {
        try {
            DB::connection()->getPdo();
            return 'Koneksi ke database berhasil!';
        } catch (\Exception $e) {
            return 'Koneksi ke database gagal: ' . $e->getMessage();
        }
    }

    // =========================
    // Halaman publik lainnya
    // =========================
    public function home()
    {
        return view('site.home');
    }

    public function struktur()
    {
        return view('site.struktur');
    }

    public function layanan()
    {
        return view('site.layanan');
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    // =========================
    // LOGIN FORM
    // =========================
    public function login()
    {
        return view('site.login');
    }

    // =========================
    // LOGIN PROSES
    // =========================
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Auth attempt otomatis pakai bcrypt
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    // =========================
    // LOGOUT
    // =========================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
