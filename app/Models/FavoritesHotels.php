<?php

namespace App\Models;

use App\Models\Hotel\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritesHotels extends Model
{
    use HasFactory;

    protected $table = 'favorites_hotels';

    protected $fillable = [
        'user_id',
        'hotel_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
