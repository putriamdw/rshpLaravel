<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RSHP UNAIR</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    @yield('style')
</head>

<body>
<div class="dashboard-wrapper">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>RSHP UNAIR</h2>
            <p>{{ auth()->user()->name ?? 'User' }}</p>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @yield('sidebar-menu')
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="main-header">
            <h1>@yield('title')</h1>
            <p>Selamat datang kembali, {{ auth()->user()->name ?? 'Pengguna' }}</p>
        </header>
        @yield('content')
    </main>
</div>
</body>
</html>
