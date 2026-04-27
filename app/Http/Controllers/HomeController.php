<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $appName = "Salam siz islan restaurantlarynyzy saylap bilersiniz!";
        return view('home.index', compact('appName'));
    }
}
