<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
            # code...
            DB::table('product')->insert([
                'product_name' => Str::random(10),
                'product_discripation' => Str::random(100),
                'product_price' => rand(1000,10000),
                'product_quantity' => rand(1,100),
               
            ]);
        }
    }
}
