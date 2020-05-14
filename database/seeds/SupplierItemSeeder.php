<?php

use Illuminate\Database\Seeder;

class SupplierItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_items')->insert([
            'item_id' => '1', 
            'supplier_id' => '1'
        ]);
        DB::table('supplier_items')->insert([
            'item_id' => '2', 
            'supplier_id' => '2'
        ]);
        DB::table('supplier_items')->insert([
            'item_id' => '3', 
            'supplier_id' => '2'
        ]);
        DB::table('supplier_items')->insert([
            'item_id' => '4', 
            'supplier_id' => '3'
        ]);
    }
}
