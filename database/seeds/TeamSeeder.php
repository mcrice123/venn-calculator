<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'user_id' => '1', 
            'name' => 'Team 1',
            'description' => 'This is a team description'
        ]);
        DB::table('teams')->insert([
            'user_id' => '1', 
            'name' => 'Team 2',
            'description' => 'This is another team description'
        ]);
        DB::table('teams')->insert([
            'user_id' => '2', 
            'name' => 'Team 1',
            'description' => 'This is a team description'
        ]);
        DB::table('teams')->insert([
            'user_id' => '2', 
            'name' => 'Team 2',
            'description' => 'This is a another team description'
        ]);
        DB::table('teams')->insert([
            'user_id' => '2', 
            'name' => 'Team 3',
            'description' => 'This is a THIRD team description'
        ]);
    }
}
