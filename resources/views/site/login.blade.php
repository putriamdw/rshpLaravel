<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - RSHP UNAIR</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
<div class="login-container">
    <h2>Login</h2>

    <!-- Tampilkan pesan error jika ada -->
    @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn-login">Masuk</button>

        <div class="back-link">
            <a href="{{ url('/') }}">Kembali ke Landing Page</a>
        </div>
    </form>
</div>
</body>
</html>
