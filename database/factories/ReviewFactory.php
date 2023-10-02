<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'product_id' => function () {
                return Product::all()->random()->id; // Retrieve the random product's ID
            },
            'customer' => $faker->name,
            'review' => $faker->paragraph,
            'star' => $faker->numberBetween(0, 5),
        ];
    }
}
