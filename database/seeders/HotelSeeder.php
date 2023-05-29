<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            'agent_id' => 1,
            'full_title' => 'Гостиница Интурист-Краснодар в Краснодаре',
            'short_title' => 'Интурист-Краснодар',
            'city_id' => 5,
            'address' => 'Улица Красная 109',
            'number_rooms' => 244,
            'description' => '',
            'star' => 4,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Платан южный в Краснодаре',
            'short_title' => 'Платан южный',
            'city_id' => 5,
            'address' => 'Улица Октябрьская 16',
            'number_rooms' => 82,
            'description' => '',
            'star' => 4,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Бизнес-отель "Форум" в Краснодаре',
            'short_title' => 'Форум',
            'city_id' => 5,
            'address' => 'Уральская 87',
            'number_rooms' => 150,
            'description' => '',
            'star' => 4,
            'category_id' => 6,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Турист в Москве',
            'short_title' => 'Турист',
            'city_id' => 1,
            'address' => 'Сельскохозяйственная ул.17',
            'number_rooms' => 479,
            'description' => '',
            'star' => 3,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница SunFlower Парк в Москве',
            'short_title' => 'SunFlower',
            'city_id' => 1,
            'address' => 'Улица Кировоградская, 11',
            'number_rooms' => 244,
            'description' => '',
            'star' => 4,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Шератон Палас в Москве',
            'short_title' => 'Шератон Палас',
            'city_id' => 1,
            'address' => '1-ая Тверская-Ямская ул.19',
            'number_rooms' => 215,
            'description' => '',
            'star' => 5,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Метрополь в Москве',
            'short_title' => 'Метрополь',
            'city_id' => 1,
            'address' => 'Театральный проезд 2',
            'number_rooms' => 388,
            'description' => '',
            'star' => 5,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Center Hotel Kazan Kremlin в Казани',
            'short_title' => 'Center Hotel Kazan Kremlin',
            'city_id' => 4,
            'address' => 'Улица Карла Маркса, 6',
            'number_rooms' => 150,
            'description' => '',
            'star' => 4,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Татарстан Казань в Казани',
            'short_title' => 'Татарстан Казань',
            'city_id' => 4,
            'address' => 'Улица Пушкина 4',
            'number_rooms' => 211,
            'description' => '',
            'star' => 3,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Гостиница Ривьера в Казани',
            'short_title' => 'Ривьера',
            'city_id' => 4,
            'address' => 'Проспект Фатыха Амирхана, д. 1',
            'number_rooms' => 210,
            'description' => '',
            'star' => 4,
            'category_id' => 2,
        ]);

        DB::table('hotels')->insert([
            'agent_id' => 0,
            'full_title' => 'Отель AMAKS Сафар в Казани',
            'short_title' => 'AMAKS Сафар Отель',
            'city_id' => 4,
            'address' => 'ул. Односторонка гривки, д. 1',
            'number_rooms' => 233,
            'description' => '',
            'star' => 3,
            'category_id' => 1,
        ]);
    }
}
