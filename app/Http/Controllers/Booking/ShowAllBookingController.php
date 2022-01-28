<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ShowAllBookingController extends Controller
{
    /** 
     * Display list of all Bookings
     * 
     * @return \Illuminate\Http\Response
    */

    public function showAllBookings()
    {
        $booking = Booking::all();

        return response()->json($booking, 200);
    }
}
