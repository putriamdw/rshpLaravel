@extends('layouts.dashboard')

@section('title', 'Dashboard Administrator')

@section('sidebar-menu')
<li><a href="{{ route('admin.jenis_hewan.index') }}">Jenis Hewan</a></li>
<li><a href="{{ route('admin.pemilik.index') }}">Pemilik</a></li>
@endsection

@section('content')
<div class="stats-cards">
    <div class="card">
        <h2>Jumlah Hewan</h2>
        <p>{{ $jumlahHewan }}</p>
    </div>
    <div class="card">
        <h2>Jumlah Pemilik</h2>
        <p>{{ $jumlahPemilik }}</p>
    </div>
    <div class="card">
        <h2>Jumlah Rekam Medis</h2>
        <p>{{ $jumlahRekamMedis }}</p>
    </div>
    <div class="card">
        <h2>Data Terbaru</h2>
        <p>{{ $dataTerbaru }}</p>
    </div>
</div>
@endsection
