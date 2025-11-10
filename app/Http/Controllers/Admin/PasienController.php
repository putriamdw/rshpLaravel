<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::with('pet', 'pemilik', 'pendaftaran')->get();
        return view('admin.pasien.index', compact('pasien'));
    }
}
