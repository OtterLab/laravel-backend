<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class DeleteBookingController extends Controller
{
    public function deleteBooking($id)
    {
        $booking = Booking::FindOrFail($id);

        if($booking->delete()) {
            return response()->json([
                'message' => 'Booking deleted successfully'
            ], 202);
        }
        else {
            return response()->json([
                'error' => 'Unable to delete booking'
            ], 400);
        }
    }
}
