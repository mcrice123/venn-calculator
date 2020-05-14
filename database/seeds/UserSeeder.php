<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@test.com',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Test2', 
            'last_name' => 'User2',
            'email' => 'test2@test.com',
            'password' => Hash::make('password2')
        ]);
    }
}
