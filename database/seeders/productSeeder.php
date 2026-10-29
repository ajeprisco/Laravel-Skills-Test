<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'product' => 'Shampoo',
                'quantity' => 2,
                'price' => 19.50,
            ],
            [
                'product' => 'Phone',
                'quantity' => 5,
                'price' => 200.50,
            ],
            [
                'product' => 'Microphone',
                'quantity' => 1,
                'price' => 19.50,
            ],
            [
                'product' => 'NailCutter',
                'quantity' => 6,
                'price' => 9.99,
            ],
            [
                'product' => 'Keyboard',
                'quantity' => 8,
                'price' => 80,
            ]
        ]);
    }
}
