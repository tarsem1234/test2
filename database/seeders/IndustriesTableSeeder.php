<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('industries')->delete();
        
        \DB::table('industries')->insert(array (
            0 => 
            array (
                'id' => 1,
            'industry' => 'Title & Settlement (Closing)',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'industry' => 'Attorney',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'industry' => 'Consultants & Administrative- edited',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'industry' => 'Transaction Coordinator',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'industry' => 'Inspection',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'industry' => 'Surveyors',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'industry' => 'Engineering',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'industry' => 'Insurance',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'industry' => 'Warranty',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'industry' => 'Landscaping',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'industry' => 'Arborist (Tree Service)',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'industry' => 'Accounting & Tax',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'industry' => 'Marketing',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'industry' => 'Home Contractor',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'industry' => 'Property Management',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'industry' => 'Background/Credit Check',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'industry' => 'Appraiser',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'industry' => 'Mortgage and Lending',
                'created_at' => '2019-02-01 14:59:26',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}