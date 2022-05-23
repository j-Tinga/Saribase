<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tag')->delete();
        
        \DB::table('tag')->insert(array (
            0 => 
            array (
                'tagID' => 1,
                'tagName' => 'House Paint',
            ),
            1 => 
            array (
                'tagID' => 2,
                'tagName' => 'Car Paint',
            ),
            2 => 
            array (
                'tagID' => 3,
                'tagName' => 'Miscellanous',
            ),
            3 => 
            array (
                'tagID' => 4,
                'tagName' => 'Acrylic',
            ),
            4 => 
            array (
                'tagID' => 5,
                'tagName' => 'Urethane',
            ),
            5 => 
            array (
                'tagID' => 6,
                'tagName' => '2K',
            ),
            6 => 
            array (
                'tagID' => 7,
                'tagName' => 'Lacquer',
            ),
        ));
        
        
    }
}