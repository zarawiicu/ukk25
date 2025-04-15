<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $primarykey = 'id';
    protected $fillable = ['nama'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
