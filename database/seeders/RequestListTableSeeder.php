<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('request_list')->delete();
        
        \DB::table('request_list')->insert(array (
            0 => 
            array (
                'requestListID' => 5,
                'requestID' => 62,
                'itemID' => 52,
                'quantityRequested' => 50,
            ),
            1 => 
            array (
                'requestListID' => 9,
                'requestID' => 69,
                'itemID' => 41,
                'quantityRequested' => 50,
            ),
            2 => 
            array (
                'requestListID' => 16,
                'requestID' => 74,
                'itemID' => 41,
                'quantityRequested' => 14,
            ),
            3 => 
            array (
                'requestListID' => 17,
                'requestID' => 78,
                'itemID' => 52,
                'quantityRequested' => 20,
            ),
            4 => 
            array (
                'requestListID' => 18,
                'requestID' => 79,
                'itemID' => 52,
                'quantityRequested' => 25,
            ),
            5 => 
            array (
                'requestListID' => 28,
                'requestID' => 83,
                'itemID' => 25,
                'quantityRequested' => 25,
            ),
            6 => 
            array (
                'requestListID' => 29,
                'requestID' => 84,
                'itemID' => 41,
                'quantityRequested' => 30,
            ),
            7 => 
            array (
                'requestListID' => 30,
                'requestID' => 85,
                'itemID' => 25,
                'quantityRequested' => 30,
            ),
            8 => 
            array (
                'requestListID' => 31,
                'requestID' => 86,
                'itemID' => 41,
                'quantityRequested' => 45,
            ),
            9 => 
            array (
                'requestListID' => 32,
                'requestID' => 86,
                'itemID' => 5,
                'quantityRequested' => 45,
            ),
            10 => 
            array (
                'requestListID' => 33,
                'requestID' => 86,
                'itemID' => 16,
                'quantityRequested' => 45,
            ),
            11 => 
            array (
                'requestListID' => 34,
                'requestID' => 86,
                'itemID' => 18,
                'quantityRequested' => 45,
            ),
            12 => 
            array (
                'requestListID' => 35,
                'requestID' => 88,
                'itemID' => 5,
                'quantityRequested' => 5,
            ),
            13 => 
            array (
                'requestListID' => 36,
                'requestID' => 89,
                'itemID' => 52,
                'quantityRequested' => 5,
            ),
            14 => 
            array (
                'requestListID' => 37,
                'requestID' => 90,
                'itemID' => 41,
                'quantityRequested' => 10,
            ),
        ));
        
        
    }
}