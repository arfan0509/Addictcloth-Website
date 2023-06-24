<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Resources\UserResource;
use App\User;

class ApiRegisterController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'  => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')
            ],
            'phone_number' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->api_token = Str::random(80);
        $user->save();

        return (new UserResource($user))->additional([
            'meta' => [
                'token' => $user->api_token,
            ],
        ]);
    }
}
