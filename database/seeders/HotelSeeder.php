<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            'full_title' => Str::random(10),
            'short_title' => Str::random(10).'@gmail.com',
            'city' => Str::make('password'),
            'address' => Str::random(10).'@gmail.com',
            'number_rooms' => Str::make('password'),
            'description' => Str::random(10).'@gmail.com',
            'star' => Str::make('password'),
            'category_id' => Integer::make('category_id'),
        ]);
    }
}
