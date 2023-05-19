<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/1-80fa4e.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/18-7822a3.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/4465430506.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/p18vv7mj455g51mt250c8nnlq8.jpg',
            'description' => 'Фото отеля'
        ]);
    }
}
