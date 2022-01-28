<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class ShowAllRoomController extends Controller
{
    /** 
     * Display list of all Rooms
     * 
     * @return \Illuminate\Http\Response
    */

    public function showAllRooms()
    {
        $room = Room::all();
        return response()->json($room, 200);
    }
}
