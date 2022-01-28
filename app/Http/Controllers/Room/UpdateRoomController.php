<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class UpdateRoomController extends Controller
{
    /** 
     * Update Room
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function getRoom($id)
    {
        $room = Room::FindOrFail($id);
        return response()->json($room, 200);
    }

    public function updateRoom(Request $request, $id)
    {
        // validate incoming data
        $request->validate([
            'roomName' => 'required|string',
            'roomType' => 'required|string',
            'roomPrice' => 'required|string',
            'roomRatings' => 'required|string',
            'roomDescription' => 'required|string'
        ]);

        $room = Room::FindOrFail($id);
        $room->roomName = $request->get('roomName');
        $room->roomType = $request->get('roomType');
        $room->roomPrice = $request->get('roomPrice');
        $room->roomRatings = $request->get('roomRatings');
        $room->roomDescription = $request->get('roomDescription');

        if($room->update($request->all())) {
            return response()->json([
                'rooms' => $room,
                'message' => 'Room successfully updated'
            ], 202);
        }
        else {
            return response()->json([
                'message' => 'Unable to update room'
            ], 400);
        }
    }
}
