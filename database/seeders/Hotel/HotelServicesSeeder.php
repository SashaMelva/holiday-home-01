<?php

namespace Database\Seeders\Hotel;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_services')->insert([
            'name' => 'завтрак',
            'description' => '',
            'price' => 0,
            'type' => 'food'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'обед',
            'description' => '',
            'price' => 0,
            'type' => 'food'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'ужин',
            'description' => '',
            'price' => 0,
            'type' => 'food'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'напитки в течении дня',
            'description' => '',
            'price' => 0,
            'type' => 'food'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'проживание с животными',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
        DB::table('hotel_services')->insert([
            'name' => 'трансфер',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
        DB::table('hotel_services')->insert([
            'name' => 'билеты на культурные мероприятия',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
        DB::table('hotel_services')->insert([
            'name' => 'билеты на канатные дороги',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
        DB::table('hotel_services')->insert([
            'name' => 'бассеин',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
        DB::table('hotel_services')->insert([
            'name' => 'сауна',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'кулер с водой',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);

        DB::table('hotel_services')->insert([
            'name' => 'Wi-Fi',
            'description' => '',
            'price' => 0,
            'type' => 'unique'
        ]);
    }
}
