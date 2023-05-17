<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchHotelRequest;
use App\Models\Hotel\Hotel;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipmentList;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking/review-booking');
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
        //
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

    public function bookingReview(SearchHotelRequest $request, string $id)
    {
        $validate = $request->validated();
        $room = Room::find((int)$id);

        $roomEquipmentLists = RoomEquipmentList::where('room_id', (int)$id)->get();

        $hotel = Hotel::find($room->id);

        return view('booking/review-booking', ['room' => $room, 'roomEquipmentLists' => $roomEquipmentLists, 'hotel' => $hotel, 'dataBooking' => $validate]);
    }

}
