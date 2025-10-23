@extends('site.layout')

@section('title', 'Layanan')

@section('content')
<h2>Layanan Umum</h2>

<table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
    <tr>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-stethoscope" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Rawat Jalan</p>
        </td>
        <td style="width: 5%;"></td>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-syringe" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Vaksinasi</p>
        </td>
        <td style="width: 5%;"></td>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-hand-holding-medical" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Akupuntur</p>
        </td>
    </tr>
</table>

<br>

<table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
    <tr>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-syringe" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Kemoterapi</p>
        </td>
        <td style="width: 5%;"></td>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-person-running" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Fisioterapi</p>
        </td>
        <td style="width: 5%;"></td>
        <td class="highlight" align="center" style="width: 30%;">
            <i class="fas fa-bath" style="font-size: 48px; color: #2b6cb0;"></i>
            <p>Mandi Terapi</p>
        </td>
    </tr>
</table>
<style>
    .highlight {
        background-color: #ffffff1f; /* putih */
        color: #001f54; /* teks gelap */
        padding: 30px 20px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    table td p {
        margin-top: 10px;
        font-size: 16px;
        font-weight: 600;
    }

    p {
        color: #c1c1c1ff;
    }
</style>
@endsection
