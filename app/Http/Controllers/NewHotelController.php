<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBaseInformationHotelRequest;
use App\Http\Requests\AddBaseInformationRoomRequest;
use App\Http\Requests\StoreAccount;
use App\Models\Agents;
use App\Models\City;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\HotelCategories;
use App\Models\Hotel\HotelServices;
use App\Models\Room\Room;
use App\Models\Room\RoomCategory;
use App\Models\Room\RoomEquipment;
use App\Models\Room\RoomEquipmentList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewHotelController extends Controller
{
    public function index()
    {
        return view('hotel-accommodation/hotel-accommodation');
    }

    public function viewAgentInformation()
    {
        return view('hotel-accommodation/create-account-agent');
    }

    public function viewAddHotel()
    {
        $cities = City::all();
        $typeHotels = HotelCategories::all();
        return view('hotel-accommodation/basic-information', ['cities' => $cities, 'typeHotels' => $typeHotels]);
    }

    public function viewAddRoomsForHotel()
    {
        $hotelId = session('hotelId');
        $services = HotelServices::all();
        $roomCategories = RoomCategory::all();
        $roomEquipments = RoomEquipment::all();

        return view('hotel-accommodation/detailed-information', ['services' => $services, 'roomCategories' => $roomCategories, 'roomEquipments' => $roomEquipments, 'hotelId' => $hotelId]);
    }

    public function viewEndAccommodationHotel()
    {
        return view('hotel-accommodation/end-add-listing');
    }

    public function storeAgentInformation(StoreAccount $request)
    {
        $validate = $request->validated();

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        Agents::create([
            'user_id' => $user["id"],
        ]);

        session(['agentId' => $user["id"]]);

        return redirect()->route('hotel.information.add');
    }

    public function storeAddHotel(AddBaseInformationHotelRequest $request)
    {
        $validate = $request->validated();
        $cityId = $validate['city_id'];

        if ($validate['city_id'] == 0 && !is_null($validate['city_add'])) {
            $cityId = City::create([
                'type' => 'город',
                'title' => $validate['city_add'],
            ]);
        }

        $hotel = Hotel::create([
            'agent_id' => session('agentId'),
            'full_title' => $validate['full_title'],
            'short_title' => $validate['short_title'],
            'city_id' => $cityId,
            'address' => $validate['address'],
            'number_rooms' => $validate['number_rooms'],
            'description' => $validate['description'],
            'star' => $validate['star'],
            'category_id' => $validate['category_id'],
            'status_id' => 1
        ]);

        session(['hotelId' => $hotel["id"]]);

        return redirect()->route('rooms.information.add');
    }

    public function storeAddHotelService(Request $request)
    {
        return back()->withInput();
    }

    public function storeAddRoomInformationForHotel(AddBaseInformationRoomRequest $request)
    {
        $validate = $request->validated();

        $room = Room::create([
            'hotel_id' => $validate['hotel_id'],
            'title' => $validate['title'],
            'category_id' => $validate['category_id'],
            'number_beds' => $validate['number_beds'],
            'area_square_meters' => $validate['area_square_meters'],
            'number_rooms' => $validate['number_rooms'],
            'description' => $validate['description'],
            'price' => $validate['price'],
            'check_in_time' => $validate['check_in_time'],
            'check_out_time' => $validate['check_out_time']
        ]);

        session(['roomIdForNumber' . $validate['room_number'] => $room["id"]]);
        return back()->withInput();
    }

    public function storeAddRoomEquipmentForHotel(Request $request)
    {
        $roomId = session('roomIdForNumber' . $request['room_number']);
        $equipment = RoomEquipment::all();

        for ($i = 0; $i < $equipment[count($equipment) - 1]->id; $i++) {
            if (isset($request[$i]) && $request[$i] == "on") {
                RoomEquipmentList::create([
                    'room_id' => $roomId,
                    'equipment_id' => $i
                ]);
            }
        }

        return back()->withInput();
    }

    public function storeAddRoomImageForHotel(Request $request)
    {
        return back()->withInput();
    }
}
