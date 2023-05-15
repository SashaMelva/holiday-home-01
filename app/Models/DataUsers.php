<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUsers extends Model
{
    use HasFactory;

    protected $table = 'data_users';

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'gender',
        'date_birth',
        'phone_number',
        'passport_data_id'
    ];

    public function pasportData()
    {
        return $this->belongsTo(PassportDataUsers::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function bookingList()
    {
        return $this->hasMany(ListBookingDataUsers::class);
    }
}
