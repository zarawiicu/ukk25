@extends('layouts.app')

@section('content')
<div class="register-container mt-5">
    <h2 class="text-center mb-4">Daftar E-BizMart</h2>

    <form method="POST" action="/register">
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
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Daftar</button>

        <p class="mt-3 text-center">
            Sudah punya akun? <a href="/login">Login sekarang</a>
        </p>
    </form>
</div>
@endsection
