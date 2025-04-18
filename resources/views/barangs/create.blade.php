@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">{{ isset($barang) ? 'Edit' : 'Tambah' }} Barang</h1>

<div class="container">

    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori_id" class="form-control" required>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
