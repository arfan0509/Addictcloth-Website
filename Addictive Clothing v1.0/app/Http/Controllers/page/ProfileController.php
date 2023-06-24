<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class profileController extends Controller
{
    
    public function index(){
        $user = User::findOrFail(Auth::id());

        return view('profile.profile', compact('user'));
    }
    public function ubahshow(){
        $user = User::findOrFail(Auth::id());
        return view('profile.ubahprofil', compact('user'));
    }
    public function ubah(Request $request){
        $user = User::findOrFail(Auth::id());

        $validatedData = $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diubah!');
    
    }

}
