<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all();
        return view('pengelola.barang', compact('barangs'));
    }

    public function edit($id_barang){
        $barang = Barang::findOrFail($id_barang);
        return view('pengelola.edit', compact('barang'));
    }

    public function update(Request $request, $id_barang){
        $barang = Barang::findOrFail($id_barang);
        $barang->merek = $request->input('merek');
        $barang->gambar = $request->input('gambar');
        $barang->harga = $request->input('harga');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->save();

        return redirect()->route('barang')->with('success', 'Data has been updated successfully!');
    }

    public function destroy($id_barang){
        $barang = Barang::findOrFail($id_barang);
        $barang->delete();

        return redirect()->route('barang')->with('success', 'Data has been deleted successfully!');
    }
}
