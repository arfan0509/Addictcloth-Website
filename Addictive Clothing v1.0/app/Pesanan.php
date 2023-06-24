<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'user_id', 'barang_id', 'status', 'alamat', 'nomor_hp', 'provinsi', 'kabupaten', 'kode_pos', 'metode_pembayaran', 'ongkir', 'total', 'bukti'
    ];

    public static function simpanPesanan($barang, $checkout)
    {
        $total = $barang->harga + $checkout->ongkir;

        return self::create([
            'user_id' => $checkout->user_id,
            'barang_id' => $barang->id,
            'status' => 'Menunggu pembayaran',
            'alamat' => $checkout->alamat,
            'nomor_hp' => $checkout->nomor_hp,
            'provinsi' => $checkout->provinsi,
            'kabupaten' => $checkout->kabupaten,
            'kode_pos' => $checkout->kode_pos,
            'metode_pembayaran' => $checkout->metode_pembayaran,
            'ongkir' => $checkout->ongkir,
            'total' => $total,
        ]);
    }

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
