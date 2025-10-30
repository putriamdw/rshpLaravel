<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisHewan;
use App\Models\RasHewan;
use App\Models\Kategori;
use App\Models\KategoriKlinis;
use App\Models\KodeTindakan;
use App\Models\Pet;
use App\Models\Role;
use App\Models\User;

class DataController extends Controller
{
    public function index()
    {
        $jenis = JenisHewan::all();
        $ras = RasHewan::all();
        $kategori = Kategori::all();
        $kategoriKlinis = KategoriKlinis::all();
        $kodeTindakan = KodeTindakan::all();
        $pet = Pet::all();
        $roles = Role::all();
        $users = User::with('role')->get();

        return view('data.index', compact(
            'jenis', 'ras', 'kategori', 'kategoriKlinis', 'kodeTindakan', 'pet', 'roles', 'users'
        ));
    }
}
