<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;

class ApiProdukController extends Controller
{
    public function produk(){
        $barangs = Barang::all();
        return response()->json($barangs);
    }
}
