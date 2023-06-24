<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;
use Money\Currency;
use Money\Money;

class CheckoutController extends Controller
{
    public function checkout($id_barang){
        $barang = Barang::find($id_barang);
        $checkout = Pesanan::where('barang_id', $id_barang)->first();
        return view('checkout.checkout', compact('barang', 'checkout'));
    }
}
