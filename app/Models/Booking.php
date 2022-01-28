<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'room_id',
        'user_id',
        'num_of_nights',
        'num_of_guest',
        'checkInDate',
        'checkOutDate'
    ];

    // Define model relationship: Room_ID belongs to Rooms Table
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id'); 
    }

    // Define model relationship: User_ID belongs to Users Table
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
