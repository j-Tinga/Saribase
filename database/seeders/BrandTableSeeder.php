<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brand')->delete();
        
        \DB::table('brand')->insert(array (
            0 => 
            array (
                'brandID' => 2,
                'brandName' => 'Epoxseal',
            ),
            1 => 
            array (
                'brandID' => 3,
                'brandName' => 'Boysen Paint',
            ),
            2 => 
            array (
                'brandID' => 4,
                'brandName' => 'Davies Paint',
            ),
            3 => 
            array (
                'brandID' => 5,
                'brandName' => 'Pinnacle',
            ),
            4 => 
            array (
                'brandID' => 6,
                'brandName' => 'E-Z Coat',
            ),
            5 => 
            array (
                'brandID' => 7,
                'brandName' => 'Hudson Paints',
            ),
            6 => 
            array (
                'brandID' => 8,
                'brandName' => 'Rain or Shine',
            ),
            7 => 
            array (
                'brandID' => 9,
                'brandName' => 'Mc Gills Paint',
            ),
            8 => 
            array (
                'brandID' => 10,
                'brandName' => 'USA',
            ),
            9 => 
            array (
                'brandID' => 11,
                'brandName' => 'Weber Acrylic',
            ),
            10 => 
            array (
                'brandID' => 12,
                'brandName' => 'Miracle',
            ),
            11 => 
            array (
                'brandID' => 13,
                'brandName' => 'Polygloss Paint',
            ),
            12 => 
            array (
                'brandID' => 14,
                'brandName' => 'Weber Urethane',
            ),
            13 => 
            array (
                'brandID' => 15,
                'brandName' => 'Anzahl Urethane',
            ),
            14 => 
            array (
                'brandID' => 16,
                'brandName' => 'Nippon Paint',
            ),
            15 => 
            array (
                'brandID' => 17,
                'brandName' => 'Dupont Paint',
            ),
            16 => 
            array (
                'brandID' => 18,
                'brandName' => 'NAX',
            ),
            17 => 
            array (
                'brandID' => 19,
                'brandName' => 'Domino 2000 Paint',
            ),
            18 => 
            array (
                'brandID' => 20,
                'brandName' => 'Durax',
            ),
            19 => 
            array (
                'brandID' => 21,
                'brandName' => 'Aikka Paint',
            ),
            20 => 
            array (
                'brandID' => 22,
                'brandName' => 'Time out Paint',
            ),
            21 => 
            array (
                'brandID' => 23,
                'brandName' => 'Cromax Paint',
            ),
            22 => 
            array (
                'brandID' => 24,
                'brandName' => 'Hippo',
            ),
            23 => 
            array (
                'brandID' => 25,
                'brandName' => 'Crocodile',
            ),
            24 => 
            array (
                'brandID' => 26,
                'brandName' => '3M',
            ),
        ));
        
        
    }
}