<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchHotelRequest;
use App\Models\DataUsers;
use App\Models\Hotel\Hotel;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipmentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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

    public function bookingReview(string $id)
    {
        $validate = [
            'city' => Redis::get('city'),
            'arrival_date' => Redis::get('arrival_date'),
            'date_departure' => Redis::get('date_departure'),
            'count_adults' => Redis::get('count_adults'),
            'count_children' => Redis::get('count_children')
        ];

        $room = Room::find((int)$id);
        $roomEquipmentLists = RoomEquipmentList::where('room_id', (int)$id)->get();
        $hotel = Hotel::find($room->id);

        $timeArrival = strtotime($validate['arrival_date']);
        $timeDeparture = strtotime($validate['date_departure']);
        $countNight = ($timeDeparture - $timeArrival) / (60 * 60 * 24);

        $userData = [Auth::user()->login, Auth::user()->email];

        if (isset(Auth::user()->userData->name)) {
            $userData = Auth::user()->userData->all;
        }

        $sumPrice = $room->price * $countNight;
        return view('booking/review-booking', [
                'room' => $room,
                'roomEquipmentLists' => $roomEquipmentLists,
                'hotel' => $hotel,
                'dataBooking' => $validate,
                'countNight' => $countNight,
                'userData' => $userData,
                'sumPrice' => $sumPrice,
                'countGuest' => $sumPrice
            ]
        );
    }
}
