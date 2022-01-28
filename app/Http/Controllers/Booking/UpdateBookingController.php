<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class UpdateBookingController extends Controller
{
    /** 
     * Update Booking
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function getBooking($id)
    {
        $booking = Booking::FindOrFail($id);
        return response()->json($booking, 200);
    }

    public function updateBooking(Request $request, $id)
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

        $booking = Booking::FindOrFail($id);
        $booking->room_id = $request->get('room_id');
        $booking->user_id = $request->get('user_id');
        $booking->num_of_nights = $request->get('num_of_nights');
        $booking->num_of_guest = $request->get('num_of_guest');
        $booking->checkIndate = $request->get('checkInDate');
        $booking->checkOutDtae = $request->get('checkOutDate');

        if($booking->update($request->all())) {
            return response()->json([
                'bookings' => $booking,
                'message' => 'Booking updated successfully'
            ], 202);
        }
        else {
            return response()->json([
                'message' => 'Unable to update booking'
            ], 400);
        }
    }
}
