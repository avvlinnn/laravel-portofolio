@extends('layouts.login')

@section('title', 'Login Admin | Alin’s Portfolio')

@section('content')
<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <h2>Welcome Back, <span>Admin 💻</span></h2>
            <p>Masuk untuk mengelola aktivitas dan proyekmu</p>
        </div>

        {{-- Alert --}}
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert error">{{ $errors->first() }}</div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('login.process') }}" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                       placeholder="Masukkan email admin" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password"
                       placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn-login">Masuk Sekarang</button>
        </form>
    </div>
</div>
@endsection
