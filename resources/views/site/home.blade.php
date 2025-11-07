@extends('layouts')

@section('title', 'Home')

@section('content')
<div class="row align-items-center g-5">
    <div class="col-md-6">
        <div class="p-4 bg-dark bg-opacity-50 rounded shadow">
            <h2 class="text-warning fw-bold mb-4">Tentang RSHP UNAIR</h2>
            <br>
            <p style="text-align: justify;">
                Rumah Sakit Hewan dibentuk di Fakultas Kedokteran Hewan Universitas Airlangga secara resmi berdiri pada tanggal 1 Januari 1972 berdasarkan SK Menteri Pendidikan dan Kebudayaan Republik Indonesia. 
                Saat itu masih berupa klinik hewan yang menjadi bagian dari Departemen Klinik Veteriner, dimana klinik hewan ini juga menjadi wahana belajar mahasiswa Fakultas Kedokteran Hewan baik program S1 Kedokteran Hewan 
                maupun Program Profesi Dokter Hewan atau lebih dikenal sebagai program Ko-Asistensi.
            </p>
        </div>
    </div>
    <br>
    <div align="center" class="col-md-6 text-center">
        <img src="{{ asset('img/rshp1.webp') }}" alt="RSHP Unair" class="img-fluid rounded shadow-lg home-img" style="max-height: 350px" height="300";>
    </div>
</div>
<br>
<div class="row mt-5">
    <div class="col text-center">
        <blockquote class="blockquote text-light fs-5">“Excellence With Morality”</blockquote>
    </div>
</div>
@endsection