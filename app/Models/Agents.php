<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $table = 'agents';

    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}