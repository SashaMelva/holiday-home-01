<?php

namespace Database\Seeders\Room;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_equipment')->insert([
            'name' => 'телевизор',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'чайник',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'мини-бар',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'кухня',
            'description' => '',
            'count' => 0
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'сейф',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'фен',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'отопление',
            'description' => '',
            'count' => 1
        ]);
    }
}
