<?php

use Illuminate\Database\Seeder;

class ConSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cons')->insert([
            'item_id' => '1', 
            'description' => 'Reviews suggest that it is tight-fitting on adults', 
            'weight' => '4'
        ]);
        DB::table('cons')->insert([
            'item_id' => '2', 
            'description' => 'Over budget', 
            'weight' => '5'
        ]);
        DB::table('cons')->insert([
            'item_id' => '2', 
            'description' => 'My hands will sweat a lot in the summer', 
            'weight' => '1'
        ]);
        DB::table('cons')->insert([
            'item_id' => '3', 
            'description' => 'I will look like a hoodlum', 
            'weight' => '2'
        ]);
        DB::table('cons')->insert([
            'item_id' => '4',
            'description' => 'I already have a magnifying glass, but it is a weaker one',
            'weight' => '3'
        ]);
    }
}
