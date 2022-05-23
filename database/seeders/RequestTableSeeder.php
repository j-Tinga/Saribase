<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('request')->delete();
        
        \DB::table('request')->insert(array (
            0 => 
            array (
                'requestID' => 60,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            1 => 
            array (
                'requestID' => 61,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            2 => 
            array (
                'requestID' => 62,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            3 => 
            array (
                'requestID' => 69,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            4 => 
            array (
                'requestID' => 74,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Delivered',
            ),
            5 => 
            array (
                'requestID' => 77,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Accepted',
            ),
            6 => 
            array (
                'requestID' => 78,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Accepted',
            ),
            7 => 
            array (
                'requestID' => 79,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Credit',
                'requestStatus' => 'Accepted',
            ),
            8 => 
            array (
                'requestID' => 83,
                'branchID' => 2,
                'requesterID' => 123,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            9 => 
            array (
                'requestID' => 84,
                'branchID' => 2,
                'requesterID' => 123,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            10 => 
            array (
                'requestID' => 85,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Accepted',
            ),
            11 => 
            array (
                'requestID' => 86,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Accepted',
            ),
            12 => 
            array (
                'requestID' => 87,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            13 => 
            array (
                'requestID' => 88,
                'branchID' => 2,
                'requesterID' => 123,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            14 => 
            array (
                'requestID' => 89,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
            15 => 
            array (
                'requestID' => 90,
                'branchID' => 1,
                'requesterID' => 12345,
                'dateRequested' => '2022-05-23 08:43:36',
                'paymentType' => 'Cash',
                'requestStatus' => 'Pending',
            ),
        ));
        
        
    }
}