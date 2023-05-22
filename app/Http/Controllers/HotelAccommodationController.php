<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelAccommodationController extends Controller
{
    public function index() {
        return view('hotel-accommodation/hotel-accommodation');
    }

    public function viewAddHotel() {
       // return view('hotel-accommodation/add-new-listing');
        return view('hotel-accommodation/basic-information');
    }

    public function viewDetailedInformationHotel() {
        return view('hotel-accommodation/detailed-information');
    }
}
