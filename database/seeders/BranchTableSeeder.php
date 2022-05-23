<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branch')->delete();
        
        \DB::table('branch')->insert(array (
            0 => 
            array (
                'branchID' => 1,
                'branchName' => 'Main',
                'branchAddress' => 'Cebu City',
                'branchManagerID' => 12346,
                'branchType' => 'Sub',
                'branchContact' => '092651116658',
            ),
            1 => 
            array (
                'branchID' => 2,
                'branchName' => 'Branch A',
                'branchAddress' => 'Consolacion, Lamac',
                'branchManagerID' => 123,
                'branchType' => 'Sub',
                'branchContact' => '092651116658',
            ),
            2 => 
            array (
                'branchID' => 3,
                'branchName' => 'Branch 3',
                'branchAddress' => 'USC',
                'branchManagerID' => 123,
                'branchType' => 'Sub',
                'branchContact' => '7844645',
            ),
        ));
        
        
    }
}