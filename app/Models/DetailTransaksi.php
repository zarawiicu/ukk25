<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksis';
    protected $primaryKey = 'id';
    protected $fillable = ['transaksi_id', 'barang_id', 'jumlah', 'harga_satuan', 'sub_total'];

    public function transaksi() 
    {
        return $this->BelongsTo(    Transaksi::class, 'transaksi_id', 'id');
    }

    public function barang() 
    {
        return $this->BelongsTo(    Barang::class, 'barang_id', 'id');
    }
}
