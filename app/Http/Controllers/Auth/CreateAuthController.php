<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreateAuthController extends Controller
{
    /** 
     * Create User
     * 
     * @param [string] email
     * @param [string] password
     * @param [string] fullname
     * @param [string] phone
     * @param [string] user_type
    */
    
    public function register(Request $request)
    {
        // validate incoming data
        $request->validate([
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8|max:18',
            'fullname' => 'required|string',
            'phone' => 'required|numeric',
            'user_type' => 'required|string'
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'user_type' => $request->user_type
        ]);

        if($user->save()) {
            $token = $user->createToken('apptoken')->plainTextToken;

            return response()->json([
                'message' => 'User successfully created',
                'token' => $token
            ], 201);
        }
        else {
            return response()->json([
                'error' => 'Please complete required fields'
            ], 422);
        }
    }
}
