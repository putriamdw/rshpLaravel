@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-body text-center">
            <h2 class="mb-4">Selamat Datang di Dashboard</h2>
            <p class="text-muted">Halo, {{ $user->name ?? 'User' }}!</p>
            <hr>

            {{-- Informasi role pengguna --}}
            @if($user && $user->role === 'admin')
                <h4 class="mb-3">Dashboard Administrator</h4>
                <p>Anda dapat mengelola data pengguna, kamar, dan laporan di sini.</p>
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Kelola Pengguna</a>
                    <a href="{{ route('rooms.index') }}" class="btn btn-success">Kelola Kamar</a>
                    <a href="{{ route('reports.index') }}" class="btn btn-warning text-white">Lihat Laporan</a>
                </div>

            @elseif($user && $user->role === 'resepsionis')
                <h4 class="mb-3">Dashboard Resepsionis</h4>
                <p>Anda dapat mengelola check-in, check-out, dan pemesanan kamar di sini.</p>
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="{{ route('bookings.index') }}" class="btn btn-info text-white">Data Pemesanan</a>
                    <a href="{{ route('guests.index') }}" class="btn btn-secondary">Data Tamu</a>
                </div>

            @else
                <h4 class="mb-3">Dashboard Umum</h4>
                <p>Anda login tanpa role khusus. Silakan hubungi admin untuk pengaturan akses.</p>
            @endif
        </div>
    </div>
</div>
@endsection
