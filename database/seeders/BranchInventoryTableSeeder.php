<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchInventoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branch_inventory')->delete();
        
        \DB::table('branch_inventory')->insert(array (
            0 => 
            array (
                'inventoryID' => 1,
                'branchID' => 1,
                'itemID' => 52,
                'itemQuantity' => 25,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            1 => 
            array (
                'inventoryID' => 2,
                'branchID' => 2,
                'itemID' => 41,
                'itemQuantity' => 14,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            2 => 
            array (
                'inventoryID' => 3,
                'branchID' => 2,
                'itemID' => 5,
                'itemQuantity' => 14,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            3 => 
            array (
                'inventoryID' => 4,
                'branchID' => 2,
                'itemID' => 16,
                'itemQuantity' => 9,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            4 => 
            array (
                'inventoryID' => 5,
                'branchID' => 2,
                'itemID' => 18,
                'itemQuantity' => 1,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            5 => 
            array (
                'inventoryID' => 6,
                'branchID' => 3,
                'itemID' => 18,
                'itemQuantity' => 53,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            6 => 
            array (
                'inventoryID' => 7,
                'branchID' => 3,
                'itemID' => 25,
                'itemQuantity' => 13,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            7 => 
            array (
                'inventoryID' => 8,
                'branchID' => 3,
                'itemID' => 16,
                'itemQuantity' => 13,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            8 => 
            array (
                'inventoryID' => 9,
                'branchID' => 3,
                'itemID' => 4,
                'itemQuantity' => 0,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
            9 => 
            array (
                'inventoryID' => 10,
                'branchID' => 2,
                'itemID' => 5,
                'itemQuantity' => 215,
                'dateUpdated' => '2022-05-23 09:43:36',
            ),
        ));
        
        
    }
}