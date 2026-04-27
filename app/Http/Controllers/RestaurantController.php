<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurantIndex() {
        $atlar = [
        "Aman", "Myrat", "Jeren", "Wepa"
    ];

    $awtorlar = \App\Models\Author::get();

    return view('restaurants.index', compact('atlar', 'awtorlar')); 
    }
}
