<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RSHP Universitas Airlangga</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
</head>

<body>
    <header>
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