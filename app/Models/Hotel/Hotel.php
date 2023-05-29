<?php

namespace App\Models\Hotel;

use App\Models\City;
use App\Models\FavoritesHotels;
use App\Models\Room\Room;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
        'full_title',
        'short_title',
        'city_id',
        'address',
        'number_rooms',
        'description',
        'star',
        'category_id',
        'status_id',
        'agent_id'
    ];

    public function category()
    {
        return $this->belongsTo(HotelCategories::class);
    }

    public function servisList()
    {
        return $this->hasMany(HotelServicesList::class);
    }

    public function img()
    {
        return $this->hasMany(HotelImg::class);
    }

    public function favoritesHotels()
    {
        return $this->hasMany(FavoritesHotels::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

//    public function agent()
//    {
//        return $this->hasMany(Room::class);
//    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
