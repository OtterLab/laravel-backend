<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowAllUserController extends Controller
{
    /** 
     * Display list of all Users
     * 
     * @return \Illuminate\Http\Response
    */

    public function showAllUsers()
    {
        $user = User::all();

        return response()->json($user, 200);
    }
}
