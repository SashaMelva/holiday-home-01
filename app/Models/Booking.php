<?php

namespace App\Models;

use App\Models\Room\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'arrival_date',
        'date_departure',
        'count_night',
        'room_id',
        'status_id',
        'hotel_id'
    ];

    public function bookingList()
    {
        return $this->hasMany(ListBookingDataUsers::class);
    }

    public function childrens()
    {
        return $this->hasMany(Children::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function status()
    {
        return $this->belongsTo(BookingStatus::class);
    }

}
