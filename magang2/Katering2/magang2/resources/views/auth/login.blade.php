@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h2>Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf
    
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
        @error('username')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="checkbox-group">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember" style="margin: 0;">Ingat Saya</label>
    </div>

    <button type="submit" class="btn">Login</button>

    <div class="link">
        Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
    </div>
</form>
@endsection