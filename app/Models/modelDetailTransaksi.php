<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelDetailTransaksi extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'id_transaksi',
        'id_barang', 
        'status',
    ];

    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'id_transaksi', 'id');
    }
    public function produk()
    {
        return $this->hasOne(product::class, 'barang', 'id');
    }
}
