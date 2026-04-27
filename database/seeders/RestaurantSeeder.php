<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            ['name' => 'Azady Koz Doner', 'address' => '30 mkr', 'rating' => 2.5, 'phone_number' => 61369258],
            ['name' => 'CZN Burak', 'address' => 'Svaboda ARKACH sowda merkz.', 'rating' => 3.5, 'phone_number' => 65889977],
            ['name' => 'Katmer Premium', 'address' => 'Avaza Dync Alys Merkz.', 'rating' => 4, 'phone_number' => 64556633],
            ['name' => 'Restaurant Cay', 'address' => 'Avaza Dync Alys Merkz.', 'rating' => 2, 'phone_number' => 61002211],
            ['name' => 'Talhan', 'address' => 'Belli dal', 'rating' => 1.5, 'phone_number' => 62142536],
            ['name' => 'Hezzet Restaurant', 'address' => '11 mkr', 'rating' => 4.5, 'phone_number' => 64152366],
            ['name' => 'Erzurum', 'address' => 'Oyumun Yanynda', 'rating' => 2.5, 'phone_number' => 62791039],
            ['name' => 'Dag Lezzeti', 'address' => 'Manysh', 'rating' => 1.5, 'phone_number' => 71121707],
            ['name' => 'Alp Et Steak House', 'address' => 'Ashgabat Stadium', 'rating' => 5, 'phone_number' => 60102070],
            ['name' => 'Uzum Cafe', 'address' => '6 mkr', 'rating' => 4.5, 'phone_number' => 61895618],
            ['name' => 'Soltan Restaurant', 'address' => 'Berkarar Sowda merkz.', 'rating' => 1.5, 'phone_number' => 61223556],
            ['name' => 'Kebapchy', 'address' => 'B. T-n Sayoly', 'rating' => 3.5, 'phone_number' => 62121514],
            ['name' => 'Mado', 'address' => 'B. T-n Sayoly', 'rating' => 1.5, 'phone_number' => 62123456],
            ['name' => 'Altyn Jam', 'address' => 'Mary Welayaty Mary Saheri', 'rating' => 2, 'phone_number' => 62789456],
            ['name' => 'Wepa Doner', 'address' => 'Hitrowka Astrowskiy', 'rating' => 5, 'phone_number' => 62580234],
        ];

        foreach ($restaurants as $restaurant){
            \App\Models\Restaurant::create([
                'name' => $restaurant['name'],
                'address' => $restaurant['address'],
                'rating' => $restaurant['rating'],
                'phone_number' => $restaurant['phone_number'],
            ]);
        }
    }
}
