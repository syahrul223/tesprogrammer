<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pembelian;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $primaryKey = 'kode_barang';

    public $incrementing = false;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'qty',
        'harga'
    ];

    public function pembelian() : BelongsTo
    {
        return $this->belongsTo(Pembelian::class, 'kode_barang', 'kode_barang');
    }
}
