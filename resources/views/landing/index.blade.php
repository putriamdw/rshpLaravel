<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RSHP UNAIR – Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <div class="overlay"></div>
    <div class="landing-content">
        <img src="{{ asset('img/logounair.png') }}" alt="Logo UNAIR" width="100" style="margin-bottom:20px;">
        <h1>Selamat Datang di RSHP UNAIR</h1>
        <p>Rumah Sakit Hewan Pendidikan<br>Universitas Airlangga</p>
        <p><em>“Excellence With Morality”</em></p>
        <a href="{{ route('home') }}" class="btn btn-enter">Masuk ke Website</a>
    </div>
    <footer>
        © {{ date('Y') }} RSHP Universitas Airlangga. All rights reserved.
    </footer>
</body>
</html>
