<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class DeleteRoomController extends Controller
{
    public function deleteRoom($id)
    {
        $room = Room::FindOrFail($id);

        if($room->delete()) {
            return response()->json([
                'message' => 'Room successfully deleted'
            ], 202);
        }
        else {
            return response()->json([
                'message' => 'Unable to delete room'
            ], 400);
        }
    }
}
