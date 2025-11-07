@extends('layouts')

@section('title', 'Struktur Organisasi')

@section('content')
<h2>Struktur Organisasi</h2>
<table style="width: 49%; border-collapse: separate; border-spacing: 0 20px; margin: 0 auto;">
    <tr>
        <th align="center" style="width: 49%; color: #ffc107; margin: 0 auto;">DIREKTUR</th>
    </tr>
    <tr>
        <td class="highlight" align="center" style="width: 49%; color: #ffc107;">
            <br>
            <br>
            <img src="{{ asset('img/direktur.png') }}" alt="Direktur" height="200">
            <br>
            <b style= "color: #ffffffff;">Dr. Ira Sari Yudaniayanti, M.P., drh.</b>
        </td>
    </tr>
</table>
<br>
<table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
    <tr>
        <th align="center" style="width: 49%; color: #ffc107;">WAKIL DIREKTUR 1</th>
        <th style="width: 2%;"></th>
        <th align="center" style="width: 49%; color: #ffc107;">WAKIL DIREKTUR 2</th>
    </tr>
    <tr>
        <td class="highlight" align="center" style="width: 49%;">
            <img src="{{ asset('img/wadir1.png') }}" alt="Wakil Direktur 1" height="200">
            <br>
            <b style= "color: #ffffffff;">Dr. Nusdianto Triakoso, M.P., drh.</b>
        </td>
        <td style="width: 2%;"></td>
        <td class="highlight" align="center" style="width: 49%;">
            <img src="{{ asset('img/wadir2.png') }}" alt="Wakil Direktur 2" height="200">
            <br>
            <b style= "color: #ffffffff;">Dr. Miyayu Soneta S., M.Vet., drh.</b>
        </td>
    </tr>
</table>
@endsection
