<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'quantity'=>fake()->numberBetween(1,10),
           'price'=>fake()->randomFloat(2,5000,50000),
           'product_id'=>Product::factory(),
           'order_id'=>Order::factory(),
        ];
    }
}
