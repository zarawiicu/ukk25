@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Kategori</h1>
    <a href="{{ route('kategoris.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Kembali</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kategoris as $kategori)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kategori->nama }}</td>
                <td>
                    <a href="{{ route('kategoris.edit', $kategori) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kategoris.destroy', $kategori) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
