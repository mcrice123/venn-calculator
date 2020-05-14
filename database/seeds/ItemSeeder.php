<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Goggles',
            'description' => 'These goggles are pretty great.', 
            'cost' => '1999'
        ]);
        DB::table('items')->insert([
            'name' => 'Gloves',
            'description' => 'These gloves are super leather.', 
            'cost' => '2999'
        ]);
        DB::table('items')->insert([
            'name' => 'Stocking Cap',
            'description' => 'It is a nice cap. Very soft.', 
            'cost' => '999'
        ]);
        DB::table('items')->insert([
            'name' => 'Magnifying Glass',
            'description' => 'This magnifying glass is great for amateur detectives!', 
            'cost' => '1200'
        ]);
    }
}
