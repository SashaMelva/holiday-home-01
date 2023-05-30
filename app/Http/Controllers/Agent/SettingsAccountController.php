<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBaseInformationHotelRequest;
use App\Models\Agents;
use App\Models\City;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\HotelCategories;
use App\Models\Hotel\HotelServices;
use Illuminate\Support\Facades\Auth;

class SettingsAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('agent/settings-account', ['user' => $user]);
    }

    public function hotel()
    {
        $agent = Agents::where('user_id', Auth::user()->id)->get();
        $hotel = Hotel::where('agent_id', $agent[0]->id)->get();
        $cities = City::all();
        $typeHotels = HotelCategories::all();
        $services = HotelServices::all();

        return view('agent/info-hotel', ['hotel' => $hotel[0], 'cities' => $cities, 'typeHotels' => $typeHotels, 'services' => $services]);
    }

    public function updateHotel(AddBaseInformationHotelRequest $request, int $id)
    {
        $validate = $request->validated();
        $cityId = $validate['city_id'];

        if ($validate['city_id'] == 0 && !is_null($validate['city_add'])) {
            $city = City::create([
                'type' => 'город',
                'title' => $validate['city_add'],
            ]);

            $cityId = $city->id;
        }

        $hotel = Hotel::find($id);

        $hotel->agent_id = session('agentId');
        $hotel->full_title = $validate['full_title'];
        $hotel->short_title = $validate['short_title'];
        $hotel->city_id = $cityId;
        $hotel->address = $validate['address'];
        $hotel->number_rooms = $validate['number_rooms'];
        $hotel->description = $validate['description'];
        $hotel->star = $validate['star'];
        $hotel->category_id = $validate['category_id'];
        $hotel->status_id = 2;
        $hotel->save();

        return redirect()->route('lists.index');
    }
}
