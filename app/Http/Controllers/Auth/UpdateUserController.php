<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateUserController extends Controller
{
    /** 
     * Update specified User
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    
    public function getUser($id)
    {
        $user = User::FindOrFail($id);
        return response()->json($user, 200);
    }

    public function updateUser(Request $request, $id)
    {
        // validate incoming data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:5|max:18',
            'fullname' => 'required|string',
            'phone' => 'required|numeric',
            'user_type' => 'required|string|in:admin'
        ]);

        $user = User::FindOrFail($id);
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->fullname = $request->get('fullname');
        $user->phone = $request->get('phone');
        $user->user_type = $request->get('user_type');

        if($user->update($request->all())) {
            return response()->json([
                'users' => $user,
                'message' => 'User updated successfully'
            ], 202);
        }
        else {
            return response()->json([
                'error' => 'User unable to update'
            ], 400);
        }
    }
}
