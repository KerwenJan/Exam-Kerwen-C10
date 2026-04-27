<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Food::create([
            'category_id' => 1,
            'restaurant_id' => 1,
            'name' => 'Iclekli',
            'price' => 65,
            'code' => 'ertytrds',
            'like_count' => 200000
        ]);
        \App\Models\Food::create([
            'category_id' => 10,
            'restaurant_id' => 2,
            'name' => 'Tiramisu',
            'price' => 125,
            'code' => 'dcvsfdbgfnhg',
            'like_count' => 20023000
        ]);
        \App\Models\Food::create([
            'category_id' => 2,
            'restaurant_id' => 3,
            'name' => 'Palow',
            'price' => 87,
            'code' => 'sacdvfbghnm',
            'like_count' => 20330000
        ]);
        \App\Models\Food::create([
            'category_id' => 6,
            'restaurant_id' => 4,
            'name' => 'Cig Kofte',
            'price' => 110,
            'code' => 'ertyu',
            'like_count' => 2000400
        ]);
        \App\Models\Food::create([
            'category_id' => 1,
            'restaurant_id' => 5,
            'name' => 'Towuk Nagentsi',
            'price' => 55,
            'code' => 'mjgfds',
            'like_count' => 2000100
        ]);
        \App\Models\Food::create([
            'category_id' => 1,
            'restaurant_id' => 6,
            'name' => 'French Fries',
            'price' => 31.50,
            'code' => 'ekikiki',
            'like_count' => 25252000
        ]);
        \App\Models\Food::create([
            'category_id' => 6,
            'restaurant_id' => 7,
            'name' => 'Towugun Kellesi',
            'price' => 0.1,
            'code' => 'siuuuuuuuuu',
            'like_count' => 79800000
        ]);
        \App\Models\Food::create([
            'category_id' => 8,
            'restaurant_id' => 8,
            'name' => 'Burger Chicken',
            'price' => 77,
            'code' => 'fahhhhhhhhhhh',
            'like_count' => 10000
        ]);
        \App\Models\Food::create([
            'category_id' => 5,
            'restaurant_id' => 9,
            'name' => 'Kola Original Gyzyl Gapak Klassyky',
            'price' => 5,
            'code' => 'rgrhghjkl',
            'like_count' => 30000
        ]);
        \App\Models\Food::create([
            'category_id' => 5,
            'restaurant_id' => 10,
            'name' => 'Pepsi',
            'price' => 6,
            'code' => 'ejkujyyg',
            'like_count' => 960000
        ]);
        \App\Models\Food::create([
            'category_id' => 3,
            'restaurant_id' => 11,
            'name' => 'Un as',
            'price' => 0,
            'code' => 'tytytyrteghj',
            'like_count' => 700000
        ]);
        \App\Models\Food::create([
            'category_id' => 1,
            'restaurant_id' => 12,
            'name' => 'Hyyar',
            'price' => 18.50,
            'code' => 'asfdgfghjk',
            'like_count' => 20
        ]);
        \App\Models\Food::create([
            'category_id' => 9,
            'restaurant_id' => 13,
            'name' => 'Suyt',
            'price' => 15,
            'code' => 'qwertt=-09iu',
            'like_count' => 200
        ]);
        \App\Models\Food::create([
            'category_id' => 9,
            'restaurant_id' => 14,
            'name' => 'Milkshake',
            'price' => 25,
            'code' => 'fdfdfdf',
            'like_count' => 20000
        ]);
        \App\Models\Food::create([
            'category_id' => 4,
            'restaurant_id' => 15,
            'name' => 'Sezer Salat',
            'price' => 120,
            'code' => 'dfdfdf',
            'like_count' => 2
        ]);
        \App\Models\Food::create([
            'category_id' => 4,
            'restaurant_id' => 1,
            'name' => 'Stunsom Salat',
            'price' => 185,
            'code' => 'ahahahahh',
            'like_count' => 1
        ]);
    }
}
