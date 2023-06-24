<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function item()
{
    return $this->belongsTo(Barang::class, 'barang_id');
}

    public function user()
{
    return $this->belongsTo(User::class);
}

public function barang()
{
    return $this->belongsTo(Barang::class);
}

}
