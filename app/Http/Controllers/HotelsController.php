<?php

namespace App\Http\Controllers;

use App\Models\Hotel\Hotel;
use App\Models\Hotel\HotelCategories;
use App\Models\Hotel\HotelServices;
use App\Models\Hotel\HotelServicesList;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipment;
use App\Models\Room\RoomEquipmentList;
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
    public function show(string $id)
    {
        $hotel = Hotel::find((int)$id);
        $servicesList = HotelServicesList::where('hotel_id', $id)->get();

        $rooms = Room::where('hotel_id', (int)$id)->get();
        $roomEquipmentLists = RoomEquipmentList::all();

        return view('hotel/hotel-about', ['hotel' => $hotel, 'servicesList' => $servicesList, 'rooms' => $rooms, 'roomEquipmentLists'=> $roomEquipmentLists]);
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

    public function searchHotels(Request $request)
    {
        return redirect()->route('hotels.index');
    }
}
