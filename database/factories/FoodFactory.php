<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = \App\Models\Category::inRandomOrder()->first();
        $restaurant = \App\Models\Restaurant::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'restaurant_id' => $restaurant->id,
            'name' => fake()->sentence(2),
            'price' => fake()->randomFloat(2, 10, 500),
            'code' => fake()->bothify('####'),
            'like_count' => fake()->numberBetween(1,100000000000)
        ];
    }
}
