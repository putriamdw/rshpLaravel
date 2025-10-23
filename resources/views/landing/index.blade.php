<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RSHP UNAIR – Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            color: #fff;
            background: linear-gradient(135deg, #001f54 0%, #003c8f 60%, #ffc107 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 31, 84, 0.75);
            z-index: 1;
        }

        .landing-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1.5s ease;
        }

        .landing-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #ffc107;
        }

        .landing-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #f8f9fa;
        }

        .btn-enter {
            margin-top: 30px;
            background-color: #ffc107;
            color: #001f54;
            border: none;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-enter:hover {
            background-color: #ffd740;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            position: absolute;
            bottom: 15px;
            width: 100%;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
        }
    </style>
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
