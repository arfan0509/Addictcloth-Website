<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'gambar',
        'merek',
        'harga',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
