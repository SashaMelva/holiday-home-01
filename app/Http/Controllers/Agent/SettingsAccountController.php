<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingsAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('agent/settings-account', ['user' => $user]);
    }
}
