<?php

use Illuminate\Database\Seeder;

class TeamItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_items')->insert([
            'supplier_item_id' => '1', 
            'team_id' => '1'
        ]);
        DB::table('team_items')->insert([
            'supplier_item_id' => '2', 
            'team_id' => '2'
        ]);
        DB::table('team_items')->insert([
            'supplier_item_id' => '3', 
            'team_id' => '2'
        ]);
        DB::table('team_items')->insert([
            'supplier_item_id' => '4', 
            'team_id' => '3'
        ]);
    }
}
