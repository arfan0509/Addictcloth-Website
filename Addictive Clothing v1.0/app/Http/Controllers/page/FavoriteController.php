<?php

namespace App\Http\Controllers\page;

use App\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $favorites = Favorite::with('barang')
            ->where('user_id', $userId)
            ->get();
        return view('favorite.favorite', compact('favorites'));
    }

    public function remove($id){
        Favorite::destroy($id);
        return redirect()->back();
    }
}
