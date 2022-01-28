<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class CreateBookingController extends Controller
{
    /** 
     * Create new Booking
     * 
     * @param [bigInt] room_id
     * @param [bigInt] user_id
     * @param [string] num_of_nights
     * @param [string] num_of_guest
     * @param [date] checkInDate
     * @param [date] checkOutDate
     * 
    */
    
    public function createBooking(Request $request)
    {
        // validate incoming data
        $request->validate([
            'room_id' => 'required|string',
            'user_id' => 'required|string',
            'num_of_nights' => 'required|string',
            'num_of_guest' => 'required|string',
            'checkInDate' => 'required|string|date',
            'checkOutDate' => 'required|string|date'
        ]);

        $booking = Booking::create([
            'room_id' => $request->room_id,
            'user_id' => $request->user_id,
            'num_of_nights' => $request->num_of_nights,
            'num_of_guest' => $request->num_of_guest,
            'checkInDate' => $request->checkInDate,
            'checkOutDate' => $request->checkOutDate
        ]);

        if($booking->save()) {
            return response()->json([
                'bookings' => $booking,
                'message' => 'Booking successfully created'
            ], 201);
        }
        else {
            return response()->json([
                'error' => 'Unable to make booking'
            ], 422);
        }
    }
    
}
