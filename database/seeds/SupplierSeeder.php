<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'user_id' => '1', 
            'name' => 'Supplier 1',
            'description' => 'This is a supplier description'
        ]);
        DB::table('suppliers')->insert([
            'user_id' => '1', 
            'name' => 'Supplier 2',
            'description' => 'This is another supplier description'
        ]);
        DB::table('suppliers')->insert([
            'user_id' => '1', 
            'name' => 'Supplier 3',
            'description' => 'This is a THIRD supplier description'
        ]);
        DB::table('suppliers')->insert([
            'user_id' => '2', 
            'name' => 'Supplier 1',
            'description' => 'This is a supplier description, heh'
        ]);
        DB::table('suppliers')->insert([
            'user_id' => '2', 
            'name' => 'Supplier 2',
            'description' => 'This is another supplier description, heh heh'
        ]);
    }
}
