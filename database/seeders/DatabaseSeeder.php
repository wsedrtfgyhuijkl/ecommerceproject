<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 50 products
        Product::factory(50)->create();

        // Seed 50 reviews
        Review::factory(300)->create();
    }
}
