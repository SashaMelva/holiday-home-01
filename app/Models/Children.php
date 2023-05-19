<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $table = 'childrens';

    protected $fillable = [
        'user_data_id',
        'guest_id',
        'booking_id'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
