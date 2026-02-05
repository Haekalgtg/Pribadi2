@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-container">
    <h1>Dashboard</h1>
    
    {{-- FITUR TAMBAHAN: FORM GANTI KOTA (TARUH DI SINI) --}}
    <form method="GET" action="{{ route('dashboard') }}" style="margin: 20px 0;">
        <div class="form-group">
            <label for="city">Pilih Kota:</label>
            <div style="display: flex; gap: 10px;">
                <input type="text" 
                       id="city"
                       name="city" 
                       placeholder="Masukkan nama kota..." 
                       value="{{ request('city', 'Surabaya') }}"
                       style="flex: 1;">
                <button type="submit" class="btn" style="width: auto; padding: 12px 30px;">
                    Cek Cuaca
                </button>
            </div>
        </div>
    </form>
    {{-- AKHIR FORM GANTI KOTA --}}
    
    {{-- WEATHER WIDGET --}}
    @if($weather)
    <div class="weather-widget">
        <div class="weather-header">
            <h3>🌤️ Cuaca Hari Ini</h3>
            <p class="weather-location">{{ $weather['name'] ?? request('city', 'Surabaya') }}</p>
        </div>
        
        <div class="weather-content">
            <div class="weather-temp">
                <span class="temp-value">{{ round($weather['main']['temp']) }}°C</span>
                <div class="weather-icon">
                    <img src="https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png" 
                         alt="{{ $weather['weather'][0]['description'] }}">
                </div>
            </div>
            
            <div class="weather-description">
                <p class="main-desc">{{ ucfirst($weather['weather'][0]['description']) }}</p>
            </div>
            
            <div class="weather-details">
                <div class="detail-item">
                    <span class="detail-label">Terasa seperti</span>
                    <span class="detail-value">{{ round($weather['main']['feels_like']) }}°C</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Kelembaban</span>
                    <span class="detail-value">{{ $weather['main']['humidity'] }}%</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Kecepatan Angin</span>
                    <span class="detail-value">{{ round($weather['wind']['speed'] * 3.6) }} km/j</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Tekanan</span>
                    <span class="detail-value">{{ $weather['main']['pressure'] }} hPa</span>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="weather-widget error">
        <p>⚠️ Tidak dapat mengambil data cuaca</p>
        <small>Pastikan API key sudah benar atau nama kota valid</small>
    </div>
    @endif

    {{-- User Info --}}
    <div class="user-info">
        <h3>Selamat Datang!</h3>
        <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Member sejak:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection