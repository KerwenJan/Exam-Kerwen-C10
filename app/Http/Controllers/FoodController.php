<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodIndex(){
        $foods = \App\Models\Food::inRandomOrder()->first();
    }


    public function foodShow($id)
    {
        $food = \App\Models\Food::where('id', $id)->firstOrFail();
        return view('foods.show', compact('food'));
    }
}
