<?php

namespace App\Models\Room;

use App\Models\Booking;
use App\Models\Hotel\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'hotel_id',
        'title',
        'number_beds',
        'number_rooms',
        'area_square_meters',
        'description',
        'price',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function equipmentsList()
    {
        return $this->hasMany(RoomEquipmentList::class);
    }

    public function img()
    {
        return $this->hasMany(RoomImg::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
