<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        return [
             'name'=>fake()->name(),
           'description' =>fake()->sentence(),
           'price' =>fake()->randomFloat(2,5000,50000),
           'quantity'=>fake()->numberBetween(1,20),
           'category_id'=> Category::factory()
        ];
    }
}
