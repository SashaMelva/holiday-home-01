<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'arrival_date',
        'date_departure',
        'count_night',
        'room_id'
    ];

    public function bookingList()
    {
        return $this->hasMany(ListBookingDataUsers::class);
    }
}
