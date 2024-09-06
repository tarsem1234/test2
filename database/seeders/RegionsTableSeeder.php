<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'region' => 'Africa',
            ),
            1 => 
            array (
                'id' => 2,
                'region' => 'Antarctica',
            ),
            2 => 
            array (
                'id' => 3,
                'region' => 'Asia',
            ),
            3 => 
            array (
                'id' => 4,
                'region' => 'Europe',
            ),
            4 => 
            array (
                'id' => 5,
                'region' => 'North America',
            ),
            5 => 
            array (
                'id' => 6,
                'region' => 'Oceania',
            ),
            6 => 
            array (
                'id' => 7,
                'region' => 'South America',
            ),
        ));
        
        
    }
}