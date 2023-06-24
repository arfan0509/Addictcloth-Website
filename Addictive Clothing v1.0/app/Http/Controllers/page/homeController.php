<?php

namespace App\Http\Controllers\page;

use App\Barang;
use App\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $barangs = Barang::all();
        return view('home.home', compact('barangs'));
    }
    public function addToFavorite(Request $request){
        $barangId = $request->route('id');

        $existingFavorite = Favorite::where('user_id', auth()->id())
            ->where('barang_id', $barangId)
            ->first();

        if (!$existingFavorite) {
            $favorite = new Favorite();
            $favorite->user_id = auth()->id();
            $favorite->barang_id = $barangId;
            $favorite->save();

            return redirect()->back()->with('success', 'Barang berhasil ditambahkan ke favorit.');
        }

        return redirect()->back()->with('error', 'Barang sudah ada di favorit.');
    }


}
