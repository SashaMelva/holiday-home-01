<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccount;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showPanel()
    {
        return view('admin/dasboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin/account/list_admin', ['users' => $admins, 'title' => 'Администраторов', 'route' => 'admin.create', 'destroy' => 'admin.delete']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/account/add_new_account', ['route' => 'admin.index', 'routeStore' => 'admin.store']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccount $request)
    {
        $validate = $request->validated();

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);


        Admin::create([
            'user_id' => $user["id"],
        ]);

        return redirect()->route('admin.index');
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
        $dataUser = User::find((int)$id);

        Admin::where('user_id', $dataUser->id)->delete();
        $dataUser->delete();

        return redirect()->route('admin.index');
    }
}
