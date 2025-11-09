<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RasHewan;

class RasHewanController extends Controller
{
    public function index()
    {
        $ras_hewan = RasHewan::with('JenisHewan')->get();
        return view('admin.ras_hewan.index', compact('ras_hewan'));
    }
}