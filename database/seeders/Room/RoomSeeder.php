<?php

namespace Database\Seeders\Room;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Стандарт и комфорт',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 34,
            'description' => '',
            'price' => 5000,
            'category_id' => 2,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Стандартный',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 25,
            'description' => '',
            'price' => 4460,
            'category_id' => 2,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Номер-студио',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 51,
            'description' => '',
            'price' => 8000,
            'category_id' => 3,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Мы весёлая семья',
            'number_beds' => 4,
            'number_rooms' => 1,
            'area_square_meters' => 34,
            'description' => '',
            'price' => 5500,
            'category_id' => 4,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Роскошный люкс',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 44,
            'description' => '',
            'price' => 11000,
            'category_id' => 3,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 2,
            'title' => 'Муравейник эконом',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 15,
            'description' => '',
            'price' => 1600,
            'category_id' => 5,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 2,
            'title' => 'Эконом экономович',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 15,
            'description' => '',
            'price' => 1500,
            'category_id' => 5,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 2,
            'title' => 'Стандарт',
            'number_beds' => 4,
            'number_rooms' => 2,
            'area_square_meters' => 31,
            'description' => '',
            'price' => 4600,
            'category_id' => 2,
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 3,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' =>3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
        ]);
    }
}
