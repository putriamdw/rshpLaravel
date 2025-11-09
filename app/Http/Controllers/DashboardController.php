<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login (jika pakai Auth)
        $user = auth()->user();

        // Kirim ke view dashboard.blade.php
        return view('dashboard', compact('user'));
    }
}
