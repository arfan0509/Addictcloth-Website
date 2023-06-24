<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserTable;

class UserController extends Controller
{
    public function index(){
        $users = UserTable::all();
        return view('pengelola.user', compact('users'));
    }
    public function destroy($id)
    {
        $user = UserTable::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'Data has been deleted successfully!');
    }
}
