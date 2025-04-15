@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Barang</h1>
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Kembali</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama }}</td>
                <td>Rp {{ number_format($barang->harga) }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->kategori->nama }}</td>
                <td>
                    <a href="{{ route('barangs.edit', $barang) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('barangs.destroy', $barang) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
