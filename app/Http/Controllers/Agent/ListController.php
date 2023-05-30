<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBaseInformationRoomRequest;
use App\Models\Agents;
use App\Models\Hotel\Hotel;
use App\Models\Room\Room;
use App\Models\Room\RoomCategory;
use App\Models\Room\RoomEquipment;
use App\Models\Room\RoomEquipmentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agent = Agents::where('user_id', Auth::user()->id)->get();
        $hotel = Hotel::where('agent_id', $agent[0]->id)->get();

        $rooms = $hotel[0]->rooms;
        return view('agent/listing', ['hotel' => $hotel[0], 'rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomCategories = RoomCategory::all();
        $roomEquipments = RoomEquipment::all();

        return view('agent/add-room', ['roomCategories' => $roomCategories, 'roomEquipments' => $roomEquipments]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddBaseInformationRoomRequest $request)
    {
        $data = $request->all();
        $validate = $request->validated();
        $equipment = RoomEquipment::all();
        $agent = Agents::where('user_id', Auth::user()->id)->get();
        $hotel = Hotel::where('agent_id', $agent[0]->id)->get();
        $hotelId = $hotel[0]->id;

        $room = Room::create([
            'hotel_id' => $hotelId,
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

        $roomId = $room->id;

        for ($i = 0; $i < $equipment[count($equipment) - 1]->id; $i++) {
            if (isset($data[$i]) && $data[$i] == "on") {
                RoomEquipmentList::create([
                    'room_id' => $roomId,
                    'equipment_id' => $i
                ]);
            }
        }

        return redirect()->route('lists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::find($id);
        $roomCategories = RoomCategory::all();
        $roomEquipments = RoomEquipment::all();
        return view('agent/edit-room', ['roomCategories' => $roomCategories, 'roomEquipments' => $roomEquipments, 'room' => $room]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddBaseInformationRoomRequest $request, string $id)
    {
        $data = $request->all();
        $validate = $request->validated();
        $room = Room::find($id);

        $room->title = $validate['title'];
        $room->category_id = $validate['category_id'];
        $room->number_beds = $validate['number_beds'];
        $room->area_square_meters = $validate['area_square_meters'];
        $room->number_rooms = $validate['number_rooms'];
        $room->description = $validate['description'];
        $room->price = $validate['price'];
        $room->check_in_time = $validate['check_in_time'];
        $room->check_out_time = $validate['check_out_time'];
        $room->save();

        return redirect()->route('lists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::find($id)->delete();
        return redirect()->route('lists.index');
    }
}
