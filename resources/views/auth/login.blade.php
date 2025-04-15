@extends('layouts.app')

@section('content')
<div class="login-container mt-5">
    <h2 class="text-center mb-4">Login ke E-BizMart</h2>

    <form method="POST" action="/login">
        @csrf

        {{-- Tampilkan Error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label for="remember" class="form-check-label">Ingat saya</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Login</button>

        <p class="mt-3 text-center">
            Belum punya akun? <a href="/register">Daftar sekarang</a>
        </p>
    </form>
</div>
@endsection