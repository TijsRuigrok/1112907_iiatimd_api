<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        $token = auth()->attempt($creds);

        if(!$token = auth()->attempt($creds))
        {
            return response()->json(['error' => 'Incorrect email/password'], 401);
        }

        return response()->json(['token' => $token]);
    }

    public function register(Request $request)
    {
        $rules = [
            'email'    => 'unique:users|required',
            'password' => 'required',
        ];

        $input     = $request->only('email','password');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }

        $email    = $request->email;
        $password = $request->password;
        $user     = User::create(['email' => $email, 'password' => Hash::make($password)]);

        return $user;
    }

    public function refresh()
    {
        try {
            $newToken = auth()->refresh();
        } catch(\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }

        return response()->json(['token' => $newToken]);
    }
}
