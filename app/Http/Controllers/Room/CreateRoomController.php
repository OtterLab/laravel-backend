<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class CreateRoomController extends Controller
{
    /**
     * Create new Room
     * 
     * @param [string] roomName
     * @param [string] roomType
     * @param [string] roomPrice
     * @param [string] roomRatings
     * @param [string] roomDescription
    */

    public function createRoom(Request $request)
    {
        // validate incoming data
        $request->validate([
            'roomName' => 'required|string',
            'roomType' => 'required|string',
            'roomPrice' => 'required|string',
            'roomRatings' => 'required|string',
            'roomDescription' => 'required|string'
        ]);

        $room = Room::create([
            'roomImage' => $request->roomImage,
            'roomName' => $request->roomName,
            'roomType' => $request->roomType,
            'roomPrice' => $request->roomPrice,
            'roomDescription' => $request->roomDescription
        ]);

        if($room->save()) {
            return response()->json([
                'rooms' => $room,
                'message' => 'Room successfully created'
            ], 201);
        }
        else {
            return response()->json([
                'error' => 'Unable to create room'
            ], 422);
        }
    }
}
