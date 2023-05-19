<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';

    protected $fillable = [
        'user_data_id',
        'passport_data_id',
        'booking_id'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
