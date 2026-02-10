@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h2>Daftar Akun</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        <small style="color: #666; font-size: 12px;">Hanya huruf, angka, dash (-) dan underscore (_)</small>
        @error('username')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password (min. 8 karakter)</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn">Daftar</button>

    <div class="link">
        Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
    </div>
</form>
@endsection