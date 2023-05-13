<?php

namespace Database\Seeders\Room;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomEquipmentListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_equipment_lists')->insert([
            'room_id' => 1,
            'equipment_id' => 2
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 1,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 1,
            'equipment_id' => 4
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 4
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 7
        ]);
    }
}
