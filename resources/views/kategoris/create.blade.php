@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">{{ isset($kategori) ? 'Edit' : 'Tambah' }} Kategori</h1>


<div class="container">
    <h1>Tambah Kategori</h1>

    <form action="{{ route('kategoris.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
