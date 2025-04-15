<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('transaksis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->onDelete('cascade'); // siapa yang beli
        $table->string('tipe'); // pembelian / penjualan
        $table->integer('total_harga');
        $table->timestamps();
    });
}

public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }

};

