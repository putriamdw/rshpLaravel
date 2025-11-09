@extends('layouts')

@section('title', 'Kontak')

@section('content')
<h2 class="mb-4 text-warning">Kontak Kami</h2>
<br>
<table style="width: 100%; border-collapse: separate; border-spacing: 0 55px;">
    <tr>
        <!-- Telepon -->
        <td align="center" style="width: 33%;">
            <i class="fas fa-phone" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>+6283112345670</p>
        </td>

        <!-- Email -->
        <td align="center" style="width: 33%;">
            <i class="fas fa-envelope" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>info@rshp.unair.ac.id</p>
        </td>
        <td style="width: 3%;"></td>

        <!-- Alamat -->
        <td align="center" style="width: 33%;">
            <i class="fas fa-map-marker-alt" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Jl. Mulyorejo, Surabaya 60115</p>
        </td>
        <td style="width: 3%"></td>
    </tr>
</table>
@endsection
