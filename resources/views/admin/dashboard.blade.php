@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Dashboard Admin</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat datang, {{ auth()->user()->name }}!</h5>
            <p class="card-text">Ini adalah halaman Dashboard untuk Admin. Silakan kelola data sesuai kebutuhan Anda.</p>
            
            <a href="{{ route('kategoris.index') }}" class="btn btn-outline-primary mr-2">Kelola Kategori</a>
            <a href="{{ route('barangs.index') }}" class="btn btn-outline-success">Kelola Barang</a>
        </div>
    </div>
</div>
@endsection
