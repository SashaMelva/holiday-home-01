<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            'type' => 'город',
            'title' => 'Москва'
        ]);

        DB::table('cities')->insert([
            'type' => 'город',
            'title' => 'Санкт-Петербург'
        ]);

        DB::table('cities')->insert([
            'type' => 'город',
            'title' => 'Сочи'
        ]);

        DB::table('cities')->insert([
            'type' => 'город',
            'title' => 'Казань'
        ]);

        DB::table('cities')->insert([
            'type' => 'город',
            'title' => 'Краснодар'
        ]);
    }
}
