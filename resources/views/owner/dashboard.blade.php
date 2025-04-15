@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Dashboard Owner</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Halo, {{ auth()->user()->name }}!</h5>
            <p class="card-text">Ini adalah halaman khusus untuk Owner. Kamu bisa memantau keseluruhan aktivitas sistem di sini.</p>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Lihat Dashboard Admin</a>
        </div>
    </div>
</div>
@endsection
