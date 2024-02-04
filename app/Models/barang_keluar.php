<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','no_transaksi_keluar','id_barang', 'tgl_keluar', 'qty_keluar', 'total_keluar'
    ];
}
