<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelServicesListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 1
        ]);

        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 2
        ]);

        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 3
        ]);

    }
}
