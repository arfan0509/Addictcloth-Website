<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;
use RealRashid\SweetAlert\Facades\Alert;


class InputController extends Controller
{
    public function index()
    {
        return view('pengelola.input');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'merek' => 'required',
            'gambar' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $barang = new Barang;
        $barang->merek = $request->merek;
        $barang->gambar = $request->gambar;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;

        $barang->save();

        return redirect()->route('input.success');
    }
}
