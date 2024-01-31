<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Barang;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = [
        'nomor_pembelian',
        'tanggal',
        'kode_barang',
        'satuan',
        'qty',
        'harga',
        'diskon',
        'subtotal'
    ];

    public function barang() : HasOne
    {
        return $this->hasOne(Barang::class, 'kode_barang', 'kode_barang');
    }
}
