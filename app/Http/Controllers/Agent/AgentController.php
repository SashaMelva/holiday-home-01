<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccount;
use App\Models\Agents;
use App\Models\Hotel\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{

    public function showPanel()
    {
        return view('agent/dashboard');
    }

    public function showBooking()
    {
        return view('agent/booking');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agents::all();
        return view('admin/account/list_admin', ['users' => $agents, 'title' => 'Агентов', 'route' => 'agents.create', 'destroy' => 'agents.delete']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/account/add_new_account', ['route' => 'agents.index', 'routeStore' => 'agents.store']);
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


        Agents::create([
            'user_id' => $user["id"],
        ]);

        return redirect()->route('agents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agent = Agents::find((int)$id);
        return view('admin/agent-show', ['agent' => $agent]);
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

        Agents::where('user_id', $dataUser->id)->delete();
        $dataUser->delete();

        return redirect()->route('agents.index');
    }
}
