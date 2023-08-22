<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) { 
            DB::table('product')->insert([
                'title' =>  $faker->name,
                'description' => "testing",
                
            ]);
        }
}
