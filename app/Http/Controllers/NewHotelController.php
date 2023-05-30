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
use App\Models\Hotel\HotelServicesList;
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
        $services = HotelServices::all();
        return view('hotel-accommodation/basic-information', ['cities' => $cities, 'typeHotels' => $typeHotels, 'services' => $services]);
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
        $data = $request->all();
        $validate = $request->validated();
        $cityId = $validate['city_id'];

        if ($validate['city_id'] == 0 && !is_null($validate['city_add'])) {
            $city = City::create([
                'type' => 'город',
                'title' => $validate['city_add'],
            ]);

            $cityId = $city->id;
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

        $hotelId = $hotel->id;
        $services = HotelServices::all();
        for ($i = 0; $i < $services[count($services) - 1]->id; $i++) {
            if (isset($data[$i]) && $data[$i] == "on") {
                HotelServicesList::create([
                    'hotel_id' => $hotelId,
                    'service_id' => $i
                ]);
            }
        }

        return redirect()->route('hotel-accommodation.end');
    }

    public function storeAddRoomInformationForHotel(AddBaseInformationRoomRequest $request)
    {

    }

    public function storeAddRoomEquipmentForHotel(Request $request)
    {
        $roomId = session('roomIdForNumber' . $request['room_number']);

        $equipment = RoomEquipment::all();

        $data = $request->all();
        for ($i = 0; $i < $equipment[count($equipment) - 1]->id; $i++) {
            if (isset($data[$i]) && $data[$i] == "on") {
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
        $roomId = session('roomIdForNumber' . $request['room_number']);

        return back()->withInput();
    }
}
