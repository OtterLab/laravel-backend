<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'roomName',
        'roomType',
        'roomRatings',
        'roomPrice',
        'roomDescription'
    ];

    // Define model relationship: hasMany Bookings Table
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
