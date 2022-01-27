<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeleteUserController extends Controller
{
    public function deleteUser($id)
    {
        $user = User::FindOrFail($id);
        
        if($user->delete()) {
            return response()->json([
                'message' => 'User deleted successfully'
            ], 202);
        }
        else {
            return response()->json([
                'error' => 'Unable to delete user'
            ], 400);
        }
    }
}
