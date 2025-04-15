@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Buat Transaksi</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Barang</label>
            <select name="barang_id" class="w-full px-4 py-2 border rounded-md">
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama }} - Rp. {{ number_format($barang->harga, 0, ',', '.') }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Jumlah</label>
            <input type="number" name="jumlah" class="w-full px-4 py-2 border rounded-md" min="1" required>
        </div>
        <button class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
            Simpan Transaksi
        </button>
    </form>
</div>
@endsection
