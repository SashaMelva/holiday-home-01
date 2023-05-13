<?php

namespace App\Models\Room;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;

    protected $table = 'room_categories';

    protected $fillable = [
        'name',
        'description'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
