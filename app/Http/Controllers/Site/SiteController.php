<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function landing()
        {
            return view('landing.index');
        }
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
    public function login()
    {
        return view('site.login');
    }
    public function cekKoneksi()
    {
        try {
            \DB::connection()->getPdo();
            return 'Koneksi ke database berhasil!';
        } catch (\Exception $e) {
            return 'Koneksi ke database gagal: ' . $e->getMessage();
        }
    }
}