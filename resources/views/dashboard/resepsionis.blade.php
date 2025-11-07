@extends('layouts.dashboard')

@section('title', 'Dashboard Resepsionis')

@section('content')
<div class="stats-cards">
    @foreach($pendaftaran as $p)
    <div class="card">
        <h3>{{ $p->nama ?? '-' }}</h3>
        <p>Pemilik: {{ $p->pemilik->user->nama ?? '-' }}</p>
        <p>Jenis Hewan: {{ $p->ras_hewan->nama_ras ?? '-' }}</p>
    </div>
    @endforeach
</div>
@endsection
