<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_categories')->insert([
            'name' => 'Отель',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Гостиница',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Апарт-отель',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Спа-отель',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Хостел',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Бизнес-отель',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => 'Другое',
            'description' => ''
        ]);
    }
}
