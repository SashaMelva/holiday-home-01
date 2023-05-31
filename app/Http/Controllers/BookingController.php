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
        $this->checkBookingStatus();
        $bookings = Auth::user()->bookings;
        $userData = DataUsers::where('user_id', Auth::user()->id)->first();
        return view('booking/list-booking', ['bookings' => $bookings, 'userData' => $userData]);
    }


    public function bookingDisable(int $bookingId)
    {
        $booking = Booking::find($bookingId);
        $booking->status_id = 4;
        $booking->save();
        return redirect()->route('index.booking');
    }

    public function viewBookingReview(string $roomId)
    {

        $booking['count_adults'] = session('count_adults');
        $booking['count_children'] = session('count_children');

        $room = Room::find((int)$roomId);
        $roomEquipmentLists = RoomEquipmentList::where('room_id', (int)$roomId)->get();
        $hotel = Hotel::find($room->hotel_id);
        $booking = $this->creatBookingDefault($roomId, $room->hotel_id);

        $timeArrival = strtotime($booking['arrival_date']);
        $timeDeparture = strtotime($booking['date_departure']);
        $countNight = ($timeDeparture - $timeArrival) / (60 * 60 * 24);

        $userId = Auth::user()->id;
        $user = User::find($userId);
        $userData = DataUsers::where('user_id', $userId)->get();
        $userPassportData = PassportDataUsers::where('data_user_id', $userId)->get();

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
        $userData = DataUsers::where('user_id', Auth::user()->id)->first();

        if (!isset($userData) || count($guests) + 1 != (int)session('count_adults') || count($children) != (int)session('count_children')) {
            return back()->exceptInput();
        }

        $booking->status_id = 2;
        $booking->save();

        $timeArrival = strtotime($booking['arrival_date']);
        $timeDeparture = strtotime($booking['date_departure']);
        $countNight = ($timeDeparture - $timeArrival) / (60 * 60 * 24);

        // session()->flush();
        return view('booking/ticket-booking', ['booking' => $booking, 'countNight' => $countNight]);
    }

    private function creatBookingDefault(int $roomId, int $hotelId)
    {
        return Booking::create([
            'user_id' => Auth::user()->id,
            'arrival_date' => session('arrival_date'),
            'date_departure' => session('date_departure'),
            'count_night' => session('count_adults'),
            'room_id' => $roomId,
            'status_id' => 1,
            'hotel_id' => $hotelId
        ]);
    }

    private function checkBookingStatus()
    {
        $dataNow = config('global.DATE_ARRIVAL');
        $bookings = Booking::where('status_id', 2)->where('user_id', Auth::user()->id)->get();

        if (count($bookings) > 0) {
            foreach ($bookings as $booking) {
                if ($booking['date_departure'] <= $dataNow) {
                    $booking->status_id = 3;
                    $booking->save();
                }
            }
        }
    }
}
