<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelServicesList extends Model
{
    use HasFactory;

    protected $table = 'services_list';

    protected $fillable = [
        'hotel_id',
        'service_id'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function service()
    {
        return $this->belongsTo(HotelServices::class);
    }
}
