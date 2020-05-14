<?php

use Illuminate\Database\Seeder;

class ProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pros')->insert([
            'item_id' => '1', 
            'description' => 'Water-proof', 
            'weight' => '2'
        ]);
        DB::table('pros')->insert([
            'item_id' => '1', 
            'description' => 'Blue looks good on me', 
            'weight' => '1'
        ]);
        DB::table('pros')->insert([
            'item_id' => '2', 
            'description' => 'They look good', 
            'weight' => '3'
        ]);
        DB::table('pros')->insert([
            'item_id' => '3', 
            'description' => 'It can keep my ears warm', 
            'weight' => '4'
        ]);
        DB::table('pros')->insert([
            'item_id' => '4',
            'description' => '30x visibility',
            'weight' => '2'
        ]);
    }
}
