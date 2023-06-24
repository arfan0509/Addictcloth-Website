<?php

namespace App\Http\Controllers\page;

use App\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    
    public function show($id_barang){
        if (Auth::check()) {
            $barang = Barang::where('id_barang', $id_barang)->first();
            return view('details.detail', compact('barang'));
        } else {
            return view('akun.login');
        } 
    }
}
