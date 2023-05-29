<?php

namespace App\Models;

use App\Models\Hotel\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status_hotel';

    protected $fillable = [
        'title',
        'description'
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
