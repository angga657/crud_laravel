<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','no_transaksi_masuk','id_barang', 'tgl_masuk', 'qty_masuk', 'total_masuk'
    ];
}
