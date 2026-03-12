<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'category_id' => 1,
                'name' => 'Espresso',
                'slug' => 'espresso',
                'description' => 'Strong coffee shot',
                'price' => 20000,
                'stock' => 100,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 1,
                'name' => 'Cappuccino',
                'slug' => 'cappuccino',
                'description' => 'Coffee with milk foam',
                'price' => 25000,
                'stock' => 100,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 2,
                'name' => 'Chocolate Latte',
                'slug' => 'chocolate-latte',
                'description' => 'Chocolate milk drink',
                'price' => 23000,
                'stock' => 100,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 4,
                'name' => 'French Fries',
                'slug' => 'french-fries',
                'description' => 'Crispy potato fries',
                'price' => 18000,
                'stock' => 100,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 5,
                'name' => 'Cheese Cake',
                'slug' => 'cheese-cake',
                'description' => 'Sweet dessert cake',
                'price' => 28000,
                'stock' => 50,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}