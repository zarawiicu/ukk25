<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    use HasFactory;

    protected $table = 'transaksi_items';
    protected $primarykey = 'id';
    protected $fillable = ['transaksi_id', 'barang_id','jumlah','harga_satuan','subtotal'];

    public function transaksi() 
    {
        return $this->BelongsTo(    Transaksi::class, 'transaksi_id', 'id');
    }

     public function barang() 
    {
        return $this->BelongsTo(    Barang::class, 'barang_id', 'id');
    }
}
