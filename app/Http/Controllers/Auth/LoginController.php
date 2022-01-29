<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /** 
     * Login user and create token
     * 
     * @param [string] email
     * @param [string] password
    */

    public function login(Request $request)
    {
        // validate incoming data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:5|max:18',
        ]);

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)) {
            // return error message if user is not authenticated
            return response()->json([
                'error' => 'Incorrect email or password'
            ], 401);
        }

        $user = $request->user();

        $token = $user->createToken('apptoken')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'login_user' => $user,
            'message' => 'Login successfully'
        ], 202);
    }
}
