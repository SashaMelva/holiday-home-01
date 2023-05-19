<?php

namespace App\Models;

use App\Models\Hotel\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'type',
        'title'
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
