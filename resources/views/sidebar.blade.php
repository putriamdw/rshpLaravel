@extends('layouts.dashboard')

@section('title', 'Data RSHP')

@section('sidebar-menu')
    <li><a href="#jenis">Jenis Hewan</a></li>
    <li><a href="#ras">Ras Hewan</a></li>
    <li><a href="#kategori">Kategori</a></li>
    <li><a href="#kategori-klinis">Kategori Klinis</a></li>
    <li><a href="#tindakan">Kode Tindakan Terapi</a></li>
    <li><a href="#pet">Pet</a></li>
    <li><a href="#role">Role</a></li>
    <li><a href="#user">User</a></li>
@endsection

@section('content')
<div class="sidebar-page">
    <section id="jenis">
        <h2>Jenis Hewan</h2>
        <p>Kelola data jenis hewan di sini.</p>
    </section>

    <section id="ras">
        <h2>Ras Hewan</h2>
        <p>Kelola data ras hewan di sini.</p>
    </section>

    <section id="kategori">
        <h2>Kategori</h2>
        <p>Kelola kategori hewan di sini.</p>
    </section>

    <section id="kategori-klinis">
        <h2>Kategori Klinis</h2>
        <p>Kelola kategori klinis di sini.</p>
    </section>

    <section id="tindakan">
        <h2>Kode Tindakan Terapi</h2>
        <p>Kelola kode tindakan terapi di sini.</p>
    </section>

    <section id="pet">
        <h2>Pet</h2>
        <p>Kelola data pet (hewan peliharaan).</p>
    </section>

    <section id="role">
        <h2>Role</h2>
        <p>Kelola data role pengguna.</p>
    </section>

    <section id="user">
        <h2>User</h2>
        <p>Kelola akun pengguna sistem RSHP UNAIR.</p>
    </section>
</div>
@endsection
