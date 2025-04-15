<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_id');
            $table->enum('metode', ['cash', 'transfer']);
            $table->integer('jumlah_bayar');
            $table->timestamps();

            $table->foreign('transaksi_id')->references('id')->on('transaksis')->cascadeOnUpdate()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
}

