<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubRegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sub_regions')->delete();
        
        DB::table('sub_regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'region_id' => 5,
                'subregion' => 'Caribbean Islands',
            ),
            1 => 
            array (
                'id' => 2,
                'region_id' => 3,
                'subregion' => 'West & Central Asia',
            ),
            2 => 
            array (
                'id' => 3,
                'region_id' => 1,
                'subregion' => 'North Africa',
            ),
            3 => 
            array (
                'id' => 4,
                'region_id' => 4,
                'subregion' => 'Europe',
            ),
            4 => 
            array (
                'id' => 5,
                'region_id' => 1,
                'subregion' => 'Sub-Saharan Africa',
            ),
            5 => 
            array (
                'id' => 6,
                'region_id' => 6,
                'subregion' => 'Oceania',
            ),
            6 => 
            array (
                'id' => 7,
                'region_id' => 7,
                'subregion' => 'South America',
            ),
            7 => 
            array (
                'id' => 8,
                'region_id' => 2,
                'subregion' => 'Antarctic',
            ),
            8 => 
            array (
                'id' => 9,
                'region_id' => 3,
                'subregion' => 'South & South East Asia',
            ),
            9 => 
            array (
                'id' => 10,
                'region_id' => 5,
                'subregion' => 'Central America',
            ),
            10 => 
            array (
                'id' => 11,
                'region_id' => 4,
                'subregion' => 'North Asia',
            ),
            11 => 
            array (
                'id' => 12,
                'region_id' => 5,
                'subregion' => 'North America',
            ),
            12 => 
            array (
                'id' => 13,
                'region_id' => 3,
                'subregion' => 'East Asia',
            ),
            13 => 
            array (
                'id' => 14,
                'region_id' => 3,
                'subregion' => 'Oceania',
            ),
            14 => 
            array (
                'id' => 15,
                'region_id' => 5,
                'subregion' => 'Europe',
            ),
            15 => 
            array (
                'id' => 16,
                'region_id' => 4,
                'subregion' => 'West & Central Asia',
            ),
        ));
        
        
    }
}