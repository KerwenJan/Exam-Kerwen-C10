<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Icda acar',
            'Ertirlik',
            'Irdenlik',
            'Salatlar',
            'Icgiler',
            'Cagalar Menyusy',
            'Mangal bolumi',
            'Burgerlar',
            'Cay bolumi',
            'Desertlar'

        ];
        
        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category
            ]);
        }
    }
}
