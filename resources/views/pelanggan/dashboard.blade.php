@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card border-info shadow-sm">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Dashboard Pelanggan</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Hai, {{ auth()->user()->name }}!</h5>
            <p class="card-text">Selamat datang di halaman pelanggan. Kamu bisa melihat riwayat pembelian, melakukan transaksi, dan lainnya.</p>

            <a href="{{ route('transaksi.print', ['transaksi' => 1]) }}" class="btn btn-outline-info">Cetak Struk Terbaru</a>
        </div>
    </div>
</div>
@endsection
