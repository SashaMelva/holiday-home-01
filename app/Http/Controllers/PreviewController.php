<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function welcomeView()
    {
        return view('main/main');
    }
}
