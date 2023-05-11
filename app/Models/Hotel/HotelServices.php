<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelServices extends Model
{
    use HasFactory;

    protected $table = 'hotel_services';

    protected $fillable = [
        'name',
        'description',
        'price',
        'type'
    ];

    public function servisList()
    {
        return $this->hasMany(HotelServicesList::class);
    }
}
