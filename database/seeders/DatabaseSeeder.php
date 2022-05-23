<?php

namespace Database\Seeders;

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
        
        $this->call(BranchTableSeeder::class);
        $this->call(EmployeeLevelTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);

        
        
        $this->call(BrandTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(TagListTableSeeder::class);
        $this->call(SupplierTableSeeder::class);
        $this->call(ItemTableSeeder::class);

        $this->call(BranchInventoryTableSeeder::class);
       
        $this->call(RequestTableSeeder::class);
        $this->call(RequestListTableSeeder::class);
        
        
    }
}