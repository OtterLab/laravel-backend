<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetAuthController extends Controller
{
    /** 
     * Get the authenticated User
     * 
     * @return [json] user object
    */
    public function getAuthUser(Request $request)
    {
        return response()->json($request->user(), 200);
    }
}
