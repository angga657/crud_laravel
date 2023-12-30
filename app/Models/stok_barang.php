<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok_barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_barang', 'nama_barang', 'jumlah_stok'
    ];
}
