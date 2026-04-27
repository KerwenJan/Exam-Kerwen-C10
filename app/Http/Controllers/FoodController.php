<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodIndex(Request $request)
    {
        
        $foods = Food::all(); 

        return view('foods.index', compact('foods'));
    }


   
        public function foodShow($id)
{
    $food = Food::with(['category', 'restaurant'])->findOrFail($id);
    return view('foods.show', compact('food'));
}
    }

