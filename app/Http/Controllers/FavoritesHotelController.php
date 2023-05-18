<?php

namespace App\Http\Controllers;

use App\Models\FavoritesHotels;
use App\Models\Hotel\HotelServicesList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorites = FavoritesHotels::where('user_id', (int)Auth::user()->id)->get();
        $servicesList = HotelServicesList::all();
        return view('hotel/favorites-hotels', ['favorites' => $favorites, 'servicesList' => $servicesList]);
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
    public function delete(string $idHotel)
    {
        $favorite = FavoritesHotels::where('user_id', Auth::user()->id)
            ->where('hotel_id', $idHotel)
            ->delete();

        return redirect()->route('favorites-hotels.index');
    }

    public function save(string $idHotel)
    {
        FavoritesHotels::create([
            'user_id' => Auth::user()->id,
            'hotel_id' => $idHotel,
        ]);

        return redirect()->route('hotels.index');
    }
}
