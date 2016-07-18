<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	Product::create([
        		'title' => $faker->sentence,
        		'description' =>$faker->paragraph(),
        		'price' => $faker->numberBetween($min = 100000, $max = 3000000),
        		'stock' => $faker->numberBetween($min = 0, $max = 10),
        		'status' => $faker->numberBetween($min = 0, $max = 1)
        		]);	
        }
    }
}
