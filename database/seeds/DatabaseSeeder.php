<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(TeamSeeder::class);
         $this->call(TeamItemSeeder::class);
         $this->call(SupplierSeeder::class);
         $this->call(SupplierItemSeeder::class);
         $this->call(ProSeeder::class);
         $this->call(ItemSeeder::class);
         $this->call(ConSeeder::class);
    }
}
