<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pet = Pet::with('pemilik')->get();
        return view('admin.pet.index', compact('pet'));
        $pemilik = Pet::with('user')->get();
        return view('admin.pemilik.index', compact('pemilik'));
    }
}