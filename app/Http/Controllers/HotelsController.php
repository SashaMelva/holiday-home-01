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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        $rooms = Room::where('hotel_id', $id)->where('number_beds', '>=' , $countGuest)->get();
//dd($rooms[2]->img);
        //$imgs = \App\Models\Room\RoomImg::where('room_id', 1)->get();
           // dd($imgs);
        $roomEquipmentLists = RoomEquipmentList::all();

        return view('hotel/hotel-about', ['hotel' => $hotel, 'servicesList' => $servicesList, 'rooms' => $rooms, 'roomEquipmentLists' => $roomEquipmentLists, 'dataBooking' => $validate]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchHotels(SearchHotelRequest $request)
    {
        $validate = $request->validated();

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

    public function searchSupportDisableHotels() {
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
