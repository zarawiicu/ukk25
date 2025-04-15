<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualans';
    protected $primarykey = 'id';
    protected $fillable = ['user_id', 'total_harga'];

    public function user() 
    {
        return $this->BelongsTo(    Transaksi::class, 'user_id', 'id');
    }

}
