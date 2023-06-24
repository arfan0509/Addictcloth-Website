<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pesanan;

class UserKonfirmasiController extends Controller
{
    public function index(){
        $users = Pesanan::all();
        return view('pengelola.konfirmasi', compact('users'));
    }
    public function konfirmasi(Request $request, $id){
        $konfirmasi = Pesanan::findOrFail($id);
        return view('pengelola.konfirmasi-user', compact('konfirmasi'));
    }
    public function update(Request $request, $id){
        $konfirmasi = Pesanan::findOrFail($id);
        
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
        
        $konfirmasi->status = $request->input('status');
        $konfirmasi->save();

        return redirect()->route('konfirmasi')->with('success', 'Status pesanan berhasil diubah!');
    }
}
