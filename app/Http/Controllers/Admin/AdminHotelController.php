<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\HotelServicesList;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipmentList;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminHotelController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        $statuses = Status::all();
        return view('admin/hotels/hotels-list', ['hotels' => $hotels, 'statuses' => $statuses]);
    }

    public function show(int $hotelId) {
        $hotel = Hotel::find($hotelId);
        $servicesList = HotelServicesList::where('hotel_id', $hotelId)->get();
        $rooms = Room::where('hotel_id', $hotelId)->get();
        $roomEquipmentLists = RoomEquipmentList::all();
        $statuses = Status::all();
        return view('admin/hotels/hotel-list-info', ['hotel' => $hotel, 'rooms' => $rooms, 'servicesList' => $servicesList, 'roomEquipmentLists' => $roomEquipmentLists, 'statuses' => $statuses]);
    }

    public function statusSave(Request $request, int $hotelId){
        $hotel = Hotel::find($hotelId);
        $hotel->status_id = (int)$request["status_id"];
        $hotel->save();
        return redirect()->route('admin.hotels');
    }

    public function newHotels() {
        $hotels = Hotel::where('status_id', 1)->get();
        $statuses = Status::all();
        return view('admin/hotels/hotels-list', ['hotels' => $hotels, 'statuses' => $statuses]);
    }
}
