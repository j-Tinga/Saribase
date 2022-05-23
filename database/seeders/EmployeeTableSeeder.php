<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee')->delete();
        
        \DB::table('employee')->insert(array (
            0 => 
            array (
                'employeeID' => 123,
                'employeeLevelID' => 2,
                'firstName' => 'Car',
                'lastName' => 'Rizal',
                'contactNumber' => '09053167449',
                'password' => '$2a$10$z.bkMLfvdzjCn0YH/jBi2.IqSHlksLz6bLsye8lNorVnJmD6TSs5i',
                'branchID' => 2,
            ),
            1 => 
            array (
                'employeeID' => 12345,
                'employeeLevelID' => 1,
                'firstName' => 'Jack',
                'lastName' => 'Wilder',
                'contactNumber' => '09053167449',
                'password' => '$2a$10$Q78iBRSXM/ChaAyec6MxJu/u6WIVOPYGNjCl3Z3mdkrqvBHaYIsd6',
                'branchID' => 1,
            ),
            2 => 
            array (
                'employeeID' => 12346,
                'employeeLevelID' => 3,
                'firstName' => 'Justin',
                'lastName' => 'Tinga',
                'contactNumber' => '092221545467',
                'password' => '$2a$10$DvgClYGSXyQ590QlA6vTgOST1kWI/ANFW2ykBWe1rLBathQaazxn2',
                'branchID' => 2,
            ),
            3 => 
            array (
                'employeeID' => 12348,
                'employeeLevelID' => 3,
                'firstName' => 'Test',
                'lastName' => 'Last',
                'contactNumber' => '095512548',
                'password' => '$2a$10$OpyXZOLJnreJgA3Mi9zke.JE92beuS9hMq/9CgbDQ8u',
                'branchID' => 2,
            ),
        ));
        
        
    }
}