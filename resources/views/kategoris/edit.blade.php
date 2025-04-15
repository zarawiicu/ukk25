@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">{{ isset($kategori) ? 'Edit' : 'Tambah' }} Kategori</h1>


<div class="container">

    <form action="{{ route('kategoris.update', $kategori) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}" required>
        </div>
        <button class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
