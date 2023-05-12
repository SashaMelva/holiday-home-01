<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImg extends Model
{
    use HasFactory;

    protected $table = 'hotel_img';

    protected $fillable = [
        'hotel_id',
        'img',
        'description'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
