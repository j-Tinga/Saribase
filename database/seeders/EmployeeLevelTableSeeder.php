<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeLevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee_level')->delete();
        
        \DB::table('employee_level')->insert(array (
            0 => 
            array (
                'employeeLevelID' => 1,
                'levelName' => 'Admin',
                'levelDescription' => 'does almost all operations',
            ),
            1 => 
            array (
                'employeeLevelID' => 2,
                'levelName' => 'Manager',
                'levelDescription' => 'some of admin stuffs',
            ),
            2 => 
            array (
                'employeeLevelID' => 3,
                'levelName' => 'Employee',
                'levelDescription' => 'just view shiz',
            ),
        ));
        
        
    }
}