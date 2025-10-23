@extends('site.layout')

@section('title', 'Struktur Organisasi')

@section('content')
<h2>Struktur Organisasi</h2>

<table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
    <tr>
        <td class="highlight" align="center" style="width: 100%; color: #ffc107;">
            <b>DIREKTUR</b>
            <br>
            <br>
            <img src="{{ asset('img/direktur.png') }}" alt="Direktur" height="200"><br>
            <b style= "color: #ffffffff;">Dr. Ira Sari Yudaniayanti, M.P., drh.</b>
        </td>
    </tr>
</table>

<br>

<table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
    <tr>
        <th align="center" style="width: 50%; color: #ffc107;">WAKIL DIREKTUR 1</th>
        <th align="center" style="width: 50%; color: #ffc107;">WAKIL DIREKTUR 2</th>
    </tr>
    <tr>
        <td class="highlight" align="center" style="width: 50%;">
            <img src="{{ asset('img/wadir1.png') }}" alt="Wakil Direktur 1" height="200"><br>
            <b>Dr. Nusdianto Triakoso, M.P., drh.</b>
        </td>
        <td class="highlight" align="center" style="width: 50%;">
            <img src="{{ asset('img/wadir2.png') }}" alt="Wakil Direktur 2" height="200"><br>
            <b>Dr. Miyayu Soneta S., M.Vet., drh.</b>
        </td>
    </tr>
</table>
@endsection
