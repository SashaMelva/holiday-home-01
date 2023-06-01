<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchHotelRequest;
use App\Models\City;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\HotelCategories;
use App\Models\Hotel\HotelServices;
use App\Models\Hotel\HotelServicesList;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipment;
use App\Models\Room\RoomEquipmentList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        $categories = HotelCategories::all();
        $services = HotelServices::all();
        $servicesList = HotelServicesList::all();

        return view('hotel/hotel-list', ['hotels' => $hotels, 'categories' => $categories, 'services' => $services, 'servicesList' => $servicesList]);
    }

    /**
     * Display the specified resource.
     */
    public function showHotel(string $id)
    {
        $validate = [
            'city' => session('city'),
            'arrival_date' => session('arrival_date'),
            'date_departure' => session('date_departure'),
            'count_adults' => session('count_adults'),
            'count_children' => session('count_children')
        ];
        $countGuest = $validate['count_children'] + $validate['count_adults'];

        $hotel = Hotel::find((int)$id);
        $servicesList = HotelServicesList::where('hotel_id', $id)->get();

        $bookingRooms = DB::table('rooms')
            ->leftJoin('bookings', 'bookings.room_id', '=', 'rooms.id')
            ->where([
                ['arrival_date', '=', $validate['arrival_date']],
                ['date_departure', '=', $validate['date_departure']],
                ['bookings.status_id', '=', 2]
            ])
            ->get();

        $bookingRooms = $bookingRooms->unique("room_id");

        $rooms = Room::where('hotel_id', $id)->where('number_beds', '>=', $countGuest)->get();

        foreach ($rooms as $key => $room){
            foreach ($bookingRooms as $bookingRoom){
                if ($room->id == $bookingRoom->room_id) {
                    unset($rooms[$key]);
                }
            }
        }

        $roomEquipmentLists = RoomEquipmentList::all();

        return view('hotel/hotel-about', ['hotel' => $hotel, 'servicesList' => $servicesList, 'rooms' => $rooms, 'roomEquipmentLists' => $roomEquipmentLists, 'dataBooking' => $validate, 'bookingRooms' => $bookingRooms]);
    }

    public function searchHotels(SearchHotelRequest $request)
    {
        $validate = $request->validated();

        if ($validate['arrival_date'] >= $validate['date_departure']) {
            return back()->withInput();
        }

        $countGuest = $validate['count_children'] + $validate['count_adults'];
        $city = City::where('title', $validate['city'])->get();

        $hotelsWithRooms = DB::table('hotels')
            ->join('rooms', 'rooms.hotel_id', '=', 'hotels.id')
            ->where([
                ['number_beds', '>=', $countGuest],
                ['city_id', '=', (int)$city[0]->id]
            ])
            ->get();

        $hotels = $hotelsWithRooms->unique("hotel_id");

        $categories = HotelCategories::all();
        $services = HotelServices::all();
        $servicesList = HotelServicesList::all();

        session(['city' => $validate['city']]);
        session(['arrival_date' => $validate['arrival_date']]);
        session(['date_departure' => $validate['date_departure']]);
        session(['count_adults' => $validate['count_adults']]);
        session(['count_children' => $validate['count_children']]);

        return view('hotel/hotel-list', ['hotels' => $hotels, 'categories' => $categories, 'services' => $services, 'servicesList' => $servicesList, 'dataBooking' => $validate]);
    }


    public function searchHotelsForCity(int $id)
    {
        $city = City::find($id);

        $hotelsWithRooms = DB::table('hotels')
            ->rightJoin('rooms', 'rooms.hotel_id', '=', 'hotels.id')
            ->where([
                ['number_beds', '>=', 1],
                ['city_id', '=', (int)$city->id],
            ])
            ->get();

        $hotels = $hotelsWithRooms->unique("hotel_id");

        $categories = HotelCategories::all();
        $services = HotelServices::all();
        $servicesList = HotelServicesList::all();

        session(['city' => $city->title]);
        $dataBooking = ['city' => $city->title];

        return view('hotel/hotel-list', ['hotels' => $hotels, 'categories' => $categories, 'services' => $services, 'servicesList' => $servicesList, 'dataBooking' => $dataBooking]);
    }

    public function searchSupportHotels(Request $request)
    {
        $validate = [
            'city' => session('city'),
            'arrival_date' => session('arrival_date'),
            'date_departure' => session('date_departure'),
            'count_adults' => session('count_adults'),
            'count_children' => session('count_children')
        ];

        $countGuest = $validate['count_children'] + $validate['count_adults'];
        $city = City::where('title', $validate['city'])->get();

        $hotelsWithRooms = DB::table('hotels')
            ->rightJoin('rooms', 'rooms.hotel_id', '=', 'hotels.id')
            ->where([
                ['number_beds', '>=', $countGuest],
                ['city_id', '=', (int)$city[0]->id],
            ])
            ->get();
        $hotels = $hotelsWithRooms->unique("hotel_id");

        foreach ($hotels as $key => $hotel) {
            if ($hotel->short_title != $request->title && !is_null($request->title)) {
                unset($hotels[$key]);
            }
            if ($hotel->category_id != $request->category) {
                unset($hotels[$key]);
            }

            if ($hotel->star != (float)$request->star && isset($request->star)) {
                unset($hotels[$key]);
            }
        }

        $categories = HotelCategories::all();
        $services = HotelServices::all();
        $servicesList = HotelServicesList::all();


        return view('hotel/hotel-list', ['hotels' => $hotels, 'categories' => $categories, 'services' => $services, 'servicesList' => $servicesList, 'dataBooking' => $validate, 'dataFilter' => $request]);
    }

    public function searchSupportDisableHotels()
    {
        $validate = [
            'city' => session('city'),
            'arrival_date' => session('arrival_date'),
            'date_departure' => session('date_departure'),
            'count_adults' => session('count_adults'),
            'count_children' => session('count_children')
        ];

        $countGuest = $validate['count_children'] + $validate['count_adults'];
        $city = City::where('title', $validate['city'])->get();

        $hotelsWithRooms = DB::table('hotels')
            ->rightJoin('rooms', 'rooms.hotel_id', '=', 'hotels.id')
            ->where([
                ['number_beds', '>=', $countGuest],
                ['city_id', '=', (int)$city[0]->id],
            ])
            ->get();
        $hotels = $hotelsWithRooms->unique("hotel_id");
        $categories = HotelCategories::all();
        $services = HotelServices::all();
        $servicesList = HotelServicesList::all();


        return view('hotel/hotel-list', ['hotels' => $hotels, 'categories' => $categories, 'services' => $services, 'servicesList' => $servicesList, 'dataBooking' => $validate]);

    }
}
