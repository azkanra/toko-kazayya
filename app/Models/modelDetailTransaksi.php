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
    ];

    public function transaksi()
    {
        return $this->belongTo(transaksi::class, 'id_transaksi', 'id');
    }
    public function produk()
    {
        return $this->belongTo(product::class, 'barang', 'id');
    }
}
