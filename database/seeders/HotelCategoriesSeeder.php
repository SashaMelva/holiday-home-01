<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => '',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => '',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => '',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => '',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => '',
            'description' => ''
        ]);

        DB::table('hotel_categories')->insert([
            'name' => '',
            'description' => ''
        ]);
    }
}
