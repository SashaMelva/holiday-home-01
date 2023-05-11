<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
        'full_title',
        'short_title',
        'city',
        'address',
        'number_rooms',
        'description',
        'star',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(HotelCategories::class);
    }

    public function servisList()
    {
        return $this->hasMany(HotelServicesList::class);
    }
}
