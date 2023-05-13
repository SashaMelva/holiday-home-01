<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImg extends Model
{
    use HasFactory;

    protected $table = 'room_images';

    protected $fillable = [
        'room_id',
        'img_url',
        'description'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
