<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiItemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('transaksi_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('transaksi_id')->constrained('transaksis')->cascadeOnUpdate()->onDelete('cascade');
        $table->foreignId('barang_id')->constrained('barangs')->cascadeOnUpdate()->onDelete('cascade');
        $table->integer('jumlah');
        $table->integer('harga_satuan');
        $table->integer('subtotal');
        $table->timestamps();
    });
}

public function down(): void
    {
        Schema::dropIfExists('transaksi_items');
    }

};
