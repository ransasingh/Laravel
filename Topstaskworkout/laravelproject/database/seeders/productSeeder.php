<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(faker $faker): void
    {
    for ($i=0; $i <10; $i++) { 
        DB::table('product')->insert([
            'product_title' => $faker->name,
            'product_name' => $faker->name,
                'product_price' => rand(10,500),
                'product_quantity' => rand(10,500),
                'product_description' => $faker->text,
        ]);
       
    }
        
    }
}
