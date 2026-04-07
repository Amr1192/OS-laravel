<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $category = Category::factory(3)->create();
        $product = Product::factory(10)->recycle($category)->create();
        $order = Order::factory(6)->create();
        OrderItem::factory(20)->recycle($order)->recycle($product)->create();

    }
}
