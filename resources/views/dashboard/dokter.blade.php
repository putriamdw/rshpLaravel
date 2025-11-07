@extends('layouts.dashboard')

@section('title', 'Dashboard Dokter / Perawat')

@section('content')
<div class="stats-cards">
    @foreach($rekamMedis as $rm)
    <div class="card">
        <h3>{{ $rm->pet->nama ?? '-' }}</h3>
        <p>Diagnosa: {{ $rm->diagnosa ?? '-' }}</p>
        <p>Terapi: {{ $rm->terapi ?? '-' }}</p>
        <p>Tanggal: {{ $rm->created_at->format('d-m-Y') ?? '-' }}</p>
    </div>
    @endforeach
</div>
@endsection
