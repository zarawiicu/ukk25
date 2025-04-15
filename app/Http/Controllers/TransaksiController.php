<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function create()
    {
        $barangs = Barang::all(); // Ambil semua barang yang tersedia
        return view('transaksi.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Ambil harga barang
        $barang = Barang::findOrFail($request->barang_id);
        $total = $barang->harga * $request->jumlah;

        // Simpan transaksi
        $transaksi = Transaksi::create([
            'barang_id' => $barang->id,
            'jumlah' => $request->jumlah,
            'harga' => $barang->harga,
            'total' => $total,
            'status' => 'pending', // Status bisa 'pending', 'completed', dll
        ]);

        return redirect()->route('transaksi.show', $transaksi->id);
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    public function print(Transaksi $transaksi)
    {
        $pdf = PDF::loadView('transaksi.struk', compact('transaksi')); // Generate PDF dari view
        return $pdf->download('struk_transaksi_' . $transaksi->id . '.pdf'); // Download PDF
    }
}


