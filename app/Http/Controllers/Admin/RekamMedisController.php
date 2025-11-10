<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RekamMedis;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam_medis = RekamMedis::with('pet')->get();
        return view('admin.rekam_medis.index', compact('rekam_medis'));
    }
}
