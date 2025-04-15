@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="text-center">
        <h1 class="display-4 font-weight-bold mb-3">Selamat Datang di E-BizMart 🚀</h1>
        <p class="lead mb-4">Tempat belanja kebutuhan terbaikmu!</p>

        <!-- Gambar -->
        <img src="{{ asset('img/cart.png') }}" alt="Shopping Icon" class="mb-4" style="width: 120px; height: 120px;">

        <!-- Tombol Login & Register -->
        <div class="d-flex flex-column align-items-center">
            <a href="{{ route('login') }}" class="btn btn-primary mb-2" style="width: 200px;">
                Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-success" style="width: 200px;">
                Register
            </a>
        </div>
    </div>
</div>
@endsection
