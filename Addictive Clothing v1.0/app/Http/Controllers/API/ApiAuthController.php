<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\User;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();

            return (new UserResource($user))->additional([
            'meta' => [
                'api_token' => $user->api_token,
            ],
        ]);
        }

        return response()->json(['error' => 'Email atau password salah.'], 401);
    }
}
