<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomEquipment extends Model
{
    use HasFactory;

    protected $table = 'room_equipment';

    protected $fillable = [
        'name',
        'description',
        'count'
    ];

    public function equipmentList()
    {
        return $this->hasMany(RoomEquipmentList::class);
    }
}
