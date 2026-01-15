<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->words(3, true),
                'description' => $faker->paragraph(),
                'price' => $faker->randomFloat(2, 5, 500),
                'image' => $faker->imageUrl(640, 480, 'products', true),
                'category' => $faker->randomElement(['Men', 'Women', 'Kids', 'Accessories', 'Sports']),
                'sold' => $faker->boolean()
            ]);
        }
        
    }
}
