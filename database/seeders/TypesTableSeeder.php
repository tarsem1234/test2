<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'MILITARY',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'PO BOX',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'STANDARD',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'UNIQUE',
            ),
        ));
        
        
    }
}