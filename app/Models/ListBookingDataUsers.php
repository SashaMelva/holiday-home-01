<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBookingDataUsers extends Model
{
    use HasFactory;

    protected $table = 'list_booking_data_users';

    protected $fillable = [
        'booking_id',
        'userData_id',
        'child'
    ];

    public function dataUser()
    {
        return $this->belongsTo(DataUsers::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
