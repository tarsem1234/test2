<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'industry_id' => 1,
                'service' => 'Title Insurance',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'industry_id' => 4,
                'service' => 'Closing Attorney',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'industry_id' => 3,
                'service' => 'Homebuyer Counseling',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'industry_id' => 3,
                'service' => 'Notary Services',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'industry_id' => 7,
                'service' => '203k Consulting',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'industry_id' => 4,
                'service' => 'Transaction Coordinator Services',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'industry_id' => 5,
                'service' => 'Chimney Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'industry_id' => 5,
                'service' => 'EIFS Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'industry_id' => 5,
                'service' => 'Mold Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'industry_id' => 5,
                'service' => 'Pest Inspection44',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'industry_id' => 5,
                'service' => 'Plumbing Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'industry_id' => 5,
                'service' => 'Pool and Spa Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'industry_id' => 5,
                'service' => 'Radon Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'industry_id' => 5,
                'service' => 'Roof Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'industry_id' => 5,
                'service' => 'Septic Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'industry_id' => 5,
                'service' => 'Thermal Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'industry_id' => 5,
                'service' => 'Underground Storage Tank Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'industry_id' => 5,
                'service' => 'Water Quality Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'industry_id' => 5,
                'service' => 'Well Inspection',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'industry_id' => 6,
                'service' => 'Land Survey',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'industry_id' => 7,
                'service' => 'Structural',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'industry_id' => 7,
                'service' => 'Geotechnical',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 28,
                'industry_id' => 8,
                'service' => 'Flood Insurance',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 29,
                'industry_id' => 8,
                'service' => 'Home Insurance',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 30,
                'industry_id' => 9,
                'service' => 'Home Warranty',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 31,
                'industry_id' => 10,
                'service' => 'Yard Design',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 32,
                'industry_id' => 10,
                'service' => 'Yard Maintenance',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 33,
                'industry_id' => 4,
                'service' => 'Tree Removal',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 34,
                'industry_id' => 5,
                'service' => 'Stump Grinding',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 35,
                'industry_id' => 12,
                'service' => 'Certified Public Accountants',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 36,
                'industry_id' => 12,
                'service' => 'Financial Planning',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => '2019-04-04 13:49:40',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 37,
                'industry_id' => 13,
                'service' => 'Photographer',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 38,
                'industry_id' => 13,
                'service' => 'Interior Design',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 39,
                'industry_id' => 13,
                'service' => 'Print Media',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 40,
                'industry_id' => 13,
                'service' => 'Web Services',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 41,
                'industry_id' => 13,
                'service' => 'Real Estate Agent',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 42,
                'industry_id' => 13,
                'service' => 'Other',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 43,
                'industry_id' => 14,
                'service' => 'Fencing',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 44,
                'industry_id' => 14,
                'service' => 'Roofing',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 45,
                'industry_id' => 14,
                'service' => 'Masonry',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 46,
                'industry_id' => 14,
                'service' => 'Windows',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 47,
                'industry_id' => 14,
                'service' => 'Vinyl Siding',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 48,
                'industry_id' => 14,
                'service' => 'Gutters',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 49,
                'industry_id' => 14,
                'service' => 'Plumbing',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 50,
                'industry_id' => 14,
                'service' => 'Climate Control',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 51,
                'industry_id' => 14,
                'service' => 'Flooring',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 52,
                'industry_id' => 14,
                'service' => 'Handy-Man',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 53,
                'industry_id' => 14,
                'service' => 'Property Manager',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 54,
                'industry_id' => 16,
                'service' => 'Background Check',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 55,
                'industry_id' => 16,
                'service' => 'Credit Check',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 56,
                'industry_id' => 17,
                'service' => 'Appraiser',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 57,
                'industry_id' => 18,
                'service' => 'Mortgage Lender',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 58,
                'industry_id' => 18,
                'service' => 'VA/FHA Approved Lender',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 59,
                'industry_id' => 13,
                'service' => 'Property Management',
                'created_at' => '2019-02-01 14:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}