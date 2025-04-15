<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $primarykey = 'id';
    protected $fillable = ['transaksi_id', 'metode', 'jumlah_bayar'];

    public function transaksi() 
    {
        return $this->BelongsTo(    Transaksi::class, 'transaksi_id', 'id');
    }
}
