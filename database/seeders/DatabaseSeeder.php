<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/1-80fa4e.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/18-7822a3.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/4465430506.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '1',
            'img_url' => 'uploads/inturist/hotel/p18vv7mj455g51mt250c8nnlq8.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '4',
            'img_url' => 'uploads/hotels/01_600_500_nocrop.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '5',
            'img_url' => 'uploads/hotels/665x495_0xac120003_11738387711562611016.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '6',
            'img_url' => 'uploads/hotels/49617_1005161701003012605.jpg',
            'description' => 'Фото отеля'
        ]);

        DB::table('hotel_img')->insert([
            'hotel_id' => '7',
            'img_url' => 'uploads/hotels/7148574-Desyat_luchshikh_ote12463205.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '8',
            'img_url' => 'uploads/hotels/square_320_88d5de9c05c6eed21fa8d2d62b50f119.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '9',
            'img_url' => 'uploads/hotels/Luchshie-oteli-i-gostinitsyi-Rossii.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '10',
            'img_url' => 'uploads/hotels/caption.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '12',
            'img_url' => 'uploads/hotels/7148574-Desyat_luchshikh_ote12463205.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotel_img')->insert([
            'hotel_id' => '13',
            'img_url' => 'uploads/hotels/Без имени.jpg',
            'description' => 'Фото отеля'
        ]);
        DB::table('hotels')->insert([
            'status_id' => 2, 'agent_id' => 1,
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
            'status_id' => 2, 'agent_id' => 2,
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
            'status_id' => 2, 'agent_id' => 3,
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
            'status_id' => 2, 'agent_id' => 4,
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
            'status_id' => 2, 'agent_id' => 5,
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
            'status_id' => 2, 'agent_id' => 6,
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
            'status_id' => 2, 'agent_id' => 7,
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
            'status_id' => 2, 'agent_id' => 8,
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
            'status_id' => 2, 'agent_id' => 9,
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
            'status_id' => 2, 'agent_id' => 10,
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
            'status_id' => 2, 'agent_id' => 11,
            'full_title' => 'Отель AMAKS Сафар в Казани',
            'short_title' => 'AMAKS Сафар Отель',
            'city_id' => 4,
            'address' => 'ул. Односторонка гривки, д. 1',
            'number_rooms' => 233,
            'description' => '',
            'star' => 3,
            'category_id' => 1,
        ]);
        DB::table('hotels')->insert([
            'status_id' => 2, 'agent_id' => 12,
            'full_title' => 'Отель ARTSTUDIO Nevsky в Санкт-петербурге',
            'short_title' => 'ARTSTUDIO Nevsky ',
            'city_id' => 2,
            'address' => 'улица 2-я Советская, д.4 Б',
            'number_rooms' => 123,
            'description' => '',
            'star' => 4,
            'category_id' => 1,
        ]);
        DB::table('hotels')->insert([
            'status_id' => 2, 'agent_id' => 13,
            'full_title' => 'Отель Indigo St. Petersburg-Tchaikovskogo в Санкт-петербурге',
            'short_title' => 'Indigo St. Petersburg-Tchaikovskogo',
            'city_id' => 2,
            'address' => 'улица Чайковского, д.17',
            'number_rooms' => 233,
            'description' => '',
            'star' => 5,
            'category_id' => 1,
        ]);


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

        DB::table('room_equipment_lists')->insert([
            'room_id' => 3,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 3,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 3,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 3,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 4,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 4,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 4,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 4,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 5,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 5,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 5,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 5,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 6,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 6,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 6,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 6,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 2,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 8,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 7,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 7,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 9,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 9,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 9,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 9,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 10,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 11,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 12,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 12,
            'equipment_id' => 7
        ]);
        DB::table('room_equipment_lists')->insert([
            'room_id' => 13,
            'equipment_id' => 1
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 13,
            'equipment_id' => 3
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 13,
            'equipment_id' => 5
        ]);

        DB::table('room_equipment_lists')->insert([
            'room_id' => 13,
            'equipment_id' => 7
        ]);
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
            'name' => 'спортзал',
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

        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 1
        ]);

        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 6
        ]);

        DB::table('services_list')->insert([
            'hotel_id' => 1,
            'service_id' => 8
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 2,
            'service_id' => 3
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 3,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 3,
            'service_id' => 6
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 3,
            'service_id' => 10
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 4,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 5,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 5,
            'service_id' => 9
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 5,
            'service_id' => 6
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 6,
            'service_id' => 3
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 7,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 7,
            'service_id' => 9
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 7,
            'service_id' => 6
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 8,
            'service_id' => 1
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 8,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 9,
            'service_id' => 1
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 9,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 10,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 11,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 12,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 13,
            'service_id' => 11
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 13,
            'service_id' => 8
        ]);
        DB::table('services_list')->insert([
            'hotel_id' => 13,
            'service_id' => 9
        ]);


        DB::table('room_categories')->insert([
            'name' => 'другое',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'стандарт',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'люкс',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'семейный',
            'description' => ''
        ]);

        DB::table('room_categories')->insert([
            'name' => 'эконом',
            'description' => ''
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'телевизор',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'чайник',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'мини-бар',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'кухня',
            'description' => '',
            'count' => 0
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'сейф',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'фен',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_equipment')->insert([
            'name' => 'отопление',
            'description' => '',
            'count' => 1
        ]);

        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/2920962506.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/3145099806.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '1',
            'img_url' => 'uploads/inturist/room/1/3145109706.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/4468329206.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/3145099806.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/inturist/room/2/3144936706.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/rooms/caption.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '2',
            'img_url' => 'uploads/rooms/Без имени.jpeg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '3',
            'img_url' => 'uploads/rooms/651A7010-HDR-копия-900x600.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '5',
            'img_url' => 'uploads/rooms/rgrrtgergw.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '8',
            'img_url' => 'uploads/rooms/251292056.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '9',
            'img_url' => 'uploads/rooms/IMG_7383_16-01-2017-900x600.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '12',
            'img_url' => 'uploads/rooms/Bedroom.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '11',
            'img_url' => 'uploads/rooms/images.jpeg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '13',
            'img_url' => 'uploads/rooms/rgtergrrg.jpeg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '16',
            'img_url' => 'uploads/rooms/l-b8da5aa2d898f4b6f9a6ea63ee4f5b20.jpg',
            'description' => 'Фото номера'
        ]);
        DB::table('room_images')->insert([
            'room_id' => '10',
            'img_url' => 'uploads/rooms/339590199.jpg',
            'description' => 'Фото номера'
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 1,
            'title' => 'Стандарт и комфорт',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 34,
            'description' => '',
            'price' => 5000,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
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
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 3,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => 4,
            'title' => 'Двухместный номер',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5600,
            'category_id' => 2,
            'check_in_time' => '13:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 4,
            'title' => 'Шестиместный номер',
            'number_beds' => 6,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 15300,
            'category_id' => 4,
            'check_in_time' => '13:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 5,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:30',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 5,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:30',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 6,
            'title' => 'Двухместный номер эконом',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 3300,
            'category_id' => 5,
            'check_in_time' => '12:30',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 6,
            'title' => 'Семейный номер',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 27,
            'description' => '',
            'price' => 8300,
            'category_id' => 4,
            'check_in_time' => '12:30',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 7,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 7,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 8,
            'title' => 'Двухместный номер кайф для двоих',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 12300,
            'category_id' => 3,
            'check_in_time' => '14:00',
            'check_out_time' => '13:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 8,
            'title' => 'Двухместный номер',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 4300,
            'category_id' => 5,
            'check_in_time' => '14:00',
            'check_out_time' => '13:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 9,
            'title' => 'Стандартный для двоих',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 4300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 9,
            'title' => 'Двухместный номер',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 2300,
            'category_id' => 5,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 10,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 10,
            'title' => 'Двухместный номер Делюкс',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 11,
            'title' => 'Двухместный номер стандарт',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 6300,
            'category_id' => 2,
            'check_in_time' => '15:00',
            'check_out_time' => '14:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 11,
            'title' => 'Двухместный номер',
            'number_beds' => 3,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 5300,
            'category_id' => 1,
            'check_in_time' => '15:00',
            'check_out_time' => '14:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 13,
            'title' => 'Двухместный номер Superior',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 24,
            'description' => '',
            'price' => 14670,
            'category_id' => 3,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 13,
            'title' => 'Двухместный номер Premium',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 19400,
            'category_id' => 3,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 12,
            'title' => 'Двухместный номер Deluxe с террасой',
            'number_beds' => 2,
            'number_rooms' => 1,
            'area_square_meters' => 27,
            'description' => '',
            'price' => 11000,
            'category_id' => 3,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);
        DB::table('rooms')->insert([
            'hotel_id' => 12,
            'title' => 'Двухместная студия',
            'number_beds' => 2,
            'number_rooms' => 2,
            'area_square_meters' => 21,
            'description' => '',
            'price' => 7600,
            'category_id' => 2,
            'check_in_time' => '14:00',
            'check_out_time' => '12:00',
        ]);

        DB::table('status_hotel')->insert([
            'title' => 'В рассмотрении',
            'description' => '',
        ]);

        DB::table('status_hotel')->insert([
            'title' => 'Применён',
            'description' => '',
        ]);

        DB::table('status_hotel')->insert([
            'title' => 'Отменён',
            'description' => '',
        ]);

        DB::table('agents')->insert([
            'user_id' => 1
        ]);
        DB::table('agents')->insert([
            'user_id' => 2
        ]);
        DB::table('agents')->insert([
            'user_id' => 3
        ]);
        DB::table('agents')->insert([
            'user_id' => 4
        ]);
        DB::table('agents')->insert([
            'user_id' => 5
        ]);
        DB::table('agents')->insert([
            'user_id' => 6
        ]);
        DB::table('agents')->insert([
            'user_id' => 7
        ]);
        DB::table('agents')->insert([
            'user_id' => 8
        ]);
        DB::table('agents')->insert([
            'user_id' => 9
        ]);
        DB::table('agents')->insert([
            'user_id' => 10
        ]);
        DB::table('agents')->insert([
            'user_id' => 11
        ]);
        DB::table('agents')->insert([
            'user_id' => 12
        ]);
        DB::table('agents')->insert([
            'user_id' => 13
        ]);

        DB::table('admins')->insert([
            'user_id' => 14
        ]);
    }
}
