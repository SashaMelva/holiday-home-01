<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportDataUsers extends Model
{
    use HasFactory;

    protected $table = 'passport_data_users';

    protected $fillable = [
        'data_user_id',
        'citizenship',
        'passport_series',
        'passport_number',
        'date_registration',
        'issued_by'
    ];

    public function dataUser()
    {
        return $this->hasOne(DataUsers::class);
    }
}
