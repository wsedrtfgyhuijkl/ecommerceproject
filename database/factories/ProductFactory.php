<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'name' => $faker->word,
            'details' => $faker->paragraph,
            'price' => $faker->numberBetween(100, 1000),
            'stock' => $faker->randomDigitNotNull(), // Use randomDigitNotNull() for a non-null digit
            'discount' => $faker->numberBetween(2, 30),
        ];
    }
    
}
