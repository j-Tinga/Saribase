<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplier')->delete();
        
        \DB::table('supplier')->insert(array (
            0 => 
            array (
                'supplierID' => 2,
                'supplierName' => 'SuperGlobe Inc',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9123167449',
            ),
            1 => 
            array (
                'supplierID' => 3,
                'supplierName' => 'Asian Coatings',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9177687648',
            ),
            2 => 
            array (
                'supplierID' => 4,
                'supplierName' => 'Nippon Paint Phillippines',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9225167458',
            ),
            3 => 
            array (
                'supplierID' => 5,
                'supplierName' => 'Extreme Distributors Inc',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9053167448',
            ),
            4 => 
            array (
                'supplierID' => 6,
                'supplierName' => 'Treasure Island',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9123167449',
            ),
            5 => 
            array (
                'supplierID' => 7,
                'supplierName' => 'March Resources',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9177687648',
            ),
            6 => 
            array (
                'supplierID' => 8,
                'supplierName' => 'CES Industries',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9225167458',
            ),
            7 => 
            array (
                'supplierID' => 9,
                'supplierName' => 'Red Octagon',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9053167448',
            ),
            8 => 
            array (
                'supplierID' => 10,
                'supplierName' => 'Rich Plus Industries',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9123167449',
            ),
            9 => 
            array (
                'supplierID' => 11,
                'supplierName' => 'Myco Marketing',
                'supplierAddress' => 'Manila',
                'supplierContact' => '9177687648',
            ),
            10 => 
            array (
                'supplierID' => 15,
                'supplierName' => 'Testttt',
                'supplierAddress' => 'asdad',
                'supplierContact' => '201546',
            ),
        ));
        
        
    }
}