<?php

namespace Database\Seeders\Room;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_categories')->insert([
            'name' => 'разное',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'стандарт',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'люкс',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'семейный',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'эконом',
            'description' => ''
        ]);
    }
}
