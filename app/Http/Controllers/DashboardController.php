<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->has('user')) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu.');
        }

        $user = $request->session()->get('user');
        return view('layouts.dashboard', compact('user'));
    }
}
