@extends('site.layout')

@section('title', 'Login')

@section('content')
<h2>Login</h2>

<form action="#" method="POST" style="max-width: 400px; margin: 30px auto; background: #f9f9f9; padding: 25px; border-radius: 10px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-weight: bold; color: #1119a3;">Email:</label>
        <input type="email" id="email" name="email" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="password" style="display: block; font-weight: bold; color: #1119a3;">Password:</label>
        <input type="password" id="password" name="password" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <button type="submit" 
        style="width: 100%; background: #1119a3; color: white; font-weight: bold; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
        Masuk
    </button>

    <div style="text-align: center; margin-top: 15px;">
        <a href="{{ url('/') }}" 
            style="display: inline-block; background: #ffc107; color: #001f54; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-top: 10px;">
            Kembali ke Landing Page
        </a>
    </div>
</form>
@endsection
