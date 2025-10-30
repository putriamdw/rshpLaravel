<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') - RSHP Universitas Airlangga</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Fonts Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #001f54 0%, #003c8f 60%, #ffc107 100%); color: #fff; min-height: 100vh; }

    header { display: flex; align-items: center; padding: 15px 30px; gap: 20px; background: rgba(0,31,84,0.85); box-shadow: 0 2px 10px rgba(0,0,0,0.3); flex-wrap: wrap; }
    header img { max-height: 70px; }
    header .titles { line-height: 1.2; flex: 1; }
    header h1 { font-size: 24px; color: #ffc107; margin-bottom: 5px; }
    header h2 { font-size: 16px; color: #f8f9fa; font-weight: 400; }

    nav { background: #001f54; box-shadow: 0 2px 5px rgba(0,0,0,0.3); }
    nav ul { list-style: none; display: flex; justify-content: flex-end; flex-wrap: wrap; gap: 25px; padding: 10px 0; margin: 0; }
    nav ul li a { text-decoration: none; color: #fff; font-weight: 600; padding: 8px 15px; border-radius: 5px; transition: all 0.3s ease; }
    nav ul li a:hover { background: #ffc107; color: #001f54; }

    section { max-width: 1200px; margin: 40px auto; padding: 30px; background: rgba(0,0,0,0.5); border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.3); }

    p, th, td { color: #f8f9fa; }
    ul li { margin: 10px 0; font-size: 16px; }
    ul li i { color: #ffc107; margin-right: 10px; }

    footer { background: #003c8f; color: #ffc107; text-align: center; padding: 15px; font-size: 14px; margin-top: 40px; box-shadow: 0 -2px 10px rgba(0,0,0,0.3); }

   {{-- CSS untuk tabel --}}
<style>
    .rshp-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: 14px;
    }
    .rshp-table th, .rshp-table td {
        border: 1px solid #fff;
        padding: 8px;
        text-align: left;
    }
    .rshp-table th {
        background-color: #ffc107;
        color: #000;
    }
    .rshp-table tr:nth-child(even) {
        background-color: rgba(255,255,255,0.1);
    }
    .data-section {
        overflow-x: auto; /* supaya scroll horizontal muncul kalau tabel lebar */
    }
</style>

</head>

<body>
<header>
    <img src="{{ asset('img/logounair.png') }}" alt="Logo Unair">
    <div class="titles">
        <h1>Rumah Sakit Hewan Pendidikan (RSHP)</h1>
        <h2>Universitas Airlangga</h2>
    </div>
</header>

<nav>
    <ul>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/struktur') }}">Struktur Organisasi</a></li>
        <li><a href="{{ url('/layanan') }}">Layanan</a></li>
        <li><a href="{{ url('/kontak') }}">Kontak</a></li>
        <li><a href="{{ url('/login') }}">Login</a></li>
    </ul>
</nav>

<section>
    @yield('content')
</section>

<footer>
    &copy; 2025 RSHP Universitas Airlangga. All Rights Reserved.
</footer>
</body>
</html>