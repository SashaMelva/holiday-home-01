<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingStatudsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('booking_statuses')->insert([
            'title' => 'ожидание подтверждения',
            'description' => ''
        ]);

        DB::table('booking_statuses')->insert([
            'title' => 'активен',
            'description' => ''
        ]);

        DB::table('booking_statuses')->insert([
            'title' => 'исполенн',
            'description' => ''
        ]);

        DB::table('booking_statuses')->insert([
            'title' => 'отменён',
            'description' => ''
        ]);
    }
}
