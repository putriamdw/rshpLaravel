@extends('site.layout')
@section('title', 'Data RSHP')
@section('content')

<h2 class="text-warning text-center mb-4">📋 Daftar Data RSHP</h2>
<div class="data-section bg-dark bg-opacity-50 p-4 rounded shadow">
<br>
    {{-- 1. Daftar Jenis Hewan --}}
    <h3 class="text-warning">1. Daftar Jenis Hewan</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jenis Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenis as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $j->nama_jenis_hewan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 2. Daftar Ras Hewan --}}
    <h3 class="text-warning mt-4">2. Daftar Ras Hewan</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ras</th>
                <th>Jenis Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ras as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->nama_ras }}</td>
                <td>{{ $r->jenisHewan->nama_jenis_hewan ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 3. Daftar Kategori --}}
    <h3 class="text-warning mt-4">3. Daftar Kategori</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->nama_kategori }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 4. Daftar Kategori Klinis --}}
    <h3 class="text-warning mt-4">4. Daftar Kategori Klinis</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori Klinis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoriKlinis as $kk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kk->nama_kategori_klinis }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 5. Daftar Kode Tindakan Terapi --}}
    <h3 class="text-warning mt-4">5. Daftar Kode Tindakan Terapi</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kodeTindakan as $kt)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kt->kode }}</td>
                <td>{{ $kt->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 6. Daftar Pet --}}
    <h3 class="text-warning mt-4">6. Daftar Pet</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pet</th>
                <th>Jenis Hewan</th>
                <th>Ras</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pet as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_pet }}</td>
                <td>{{ $p->jenisHewan->nama_jenis_hewan ?? '-' }}</td>
                <td>{{ $p->rasHewan->nama_ras ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 7. Daftar Role --}}
    <h3 class="text-warning mt-4">7. Daftar Role</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $role->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
    {{-- 8. Daftar User dengan Rolenya --}}
    <h3 class="text-warning mt-4">8. Daftar User</h3>
    <table class="rshp-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
