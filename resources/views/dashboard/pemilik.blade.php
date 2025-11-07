@extends('layouts.dashboard')

@section('title', 'Dashboard Pemilik')

@section('content')
<div class="stats-cards">
    @foreach($pets as $pet)
    <div class="card">
        <h3>{{ $pet->nama }}</h3>
        <p>Jenis: {{ $pet->ras_hewan->nama_ras ?? '-' }}</p>
        <p>Tanggal Lahir: {{ $pet->tanggal_lahir }}</p>
        <p>Warna / Tanda: {{ $pet->warna_tanda }}</p>
        <p>Jenis Kelamin: {{ $pet->jenis_kelamin }}</p>
    </div>
    @endforeach
</div>
@endsection
