<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchHotelRequest;
use App\Models\Booking;
use App\Models\Children;
use App\Models\DataUsers;
use App\Models\Guest;
use App\Models\Hotel\Hotel;
use App\Models\PassportDataUsers;
use App\Models\Room\Room;
use App\Models\Room\RoomEquipmentList;
use App\Models\User;
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
        //dd(Auth::user()->bookings);
        $booking = Auth::user()->bookings;
        return view('booking/list-booking');
    }
    public function bookingRoom(Request $request)
    {
        $validate = $request->validated();
    }

    private function addUserData()
    {

    }

    public function viewBookingReview(string $roomId)
    {
        $booking = $this->creatBookingDefault($roomId);
        $booking['count_adults'] = Redis::get('count_adults');
        $booking['count_children'] = Redis::get('count_children');

        $room = Room::find((int)$roomId);
        $roomEquipmentLists = RoomEquipmentList::where('room_id', (int)$roomId)->get();
        $hotel = Hotel::find($room->id);

        $timeArrival = strtotime($booking['arrival_date']);
        $timeDeparture = strtotime($booking['date_departure']);
        $countNight = ($timeDeparture - $timeArrival) / (60 * 60 * 24);

        $roomId = Auth::user()->id;
        $user = User::find($roomId);
        $userData = DataUsers::where('id_user', $roomId)->get();
        $userPassportData = PassportDataUsers::where('data_user_id', $roomId)->get();

        $sumPrice = $room->price * $countNight;
        return view('booking/review-booking', [
                'room' => $room,
                'roomEquipmentLists' => $roomEquipmentLists,
                'hotel' => $hotel,
                'dataBooking' => $booking,
                'countNight' => $countNight,
                'sumPrice' => $sumPrice,
                'userData' => $userData,
                'userPassportData' => $userPassportData,
                'user' => $user
            ]
        );
    }

    public function checkBooking(int $bookingId)
    {
        $booking = Booking::find($bookingId);
        $guests = Guest::where('booking_id', $bookingId)->get();
        $children = Children::where('booking_id', $bookingId)->get();

        if (count($guests) + 1 != (int)Redis::get('count_adults') || count($children) != (int)Redis::get('count_children')) {
            return back()->exceptInput();
        }

        $booking->booking_status_id = 2;
        $booking->save();
        return redirect()->route('ticket.booking', $bookingId);
    }

    public function getTicketBooking(int $bookingId)
    {
        $booking = Booking::find($bookingId);
        $timeArrival = strtotime($booking['arrival_date']);
        $timeDeparture = strtotime($booking['date_departure']);
        $countNight = ($timeDeparture - $timeArrival) / (60 * 60 * 24);

        return view('booking/ticket-booking', ['booking' => $booking, 'countNight' => $countNight]);
    }

    private function creatBookingDefault(int $roomId)
    {
        return Booking::create([
            'id_user' => Auth::user()->id,
            'arrival_date' => Redis::get('arrival_date'),
            'date_departure' => Redis::get('date_departure'),
            'count_night' => Redis::get('count_adults'),
            'room_id' => $roomId,
            'booking_status_id' => 1
        ]);
    }
}
