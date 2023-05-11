<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategories extends Model
{
    use HasFactory;

    protected $table = 'hotel_categories';

    protected $fillable = [
        'name',
        'description'
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
