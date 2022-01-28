<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    /** 
     * Logout user (Revoke the token)
     * 
     * @return [string] message
    */

    public function logout()
    {
        $cookie = Cookie::forget('jwt');
        //$request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout successfully'
        ], 202)->withCookie($cookie);
    }
}
