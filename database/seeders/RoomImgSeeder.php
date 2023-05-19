<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/2920962506.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/3145099806.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/3145109706.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/4468329206.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/3145099806.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/3144936706.jpg',
            'description' => 'Фото номера'
        ]);
    }
}
