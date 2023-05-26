<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccount;
use App\Models\Agents;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = User::all();
        return view('admin/account/guest-list', ['users' => $guests, 'route' => 'guests.create', 'destroy' => 'guests.delete']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/account/add_new_account', ['route' => 'guests.index', 'routeStore' => 'guests.store']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccount $request)
    {
        $validate = $request->validated();

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        return redirect()->route('guests.index');
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
    public function delete(string $id)
    {
        User::find((int)$id)->delete();
        return redirect()->route('guests.index');
    }
}
