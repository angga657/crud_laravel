<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nama_barang', 'deskripsi','jumlah_stok','harga'
    ];

    protected $table = 'barangs';

}
