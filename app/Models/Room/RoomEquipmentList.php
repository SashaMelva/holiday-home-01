<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomEquipmentList extends Model
{
    use HasFactory;

    protected $table = 'room_equipment_lists';

    protected $fillable = [
        'room_id',
        'equipment_id'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function equipment()
    {
        return $this->belongsTo(RoomEquipment::class);
    }
}
