<?php

use Illuminate\Database\Seeder;

class AdditionalInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('additional_information')->delete();
        
        \DB::table('additional_information')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Appliances',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Cooling Type',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Floor Covering',
                'parent_id' => NULL,
                'created_at' => '2018-06-27 17:18:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Heating Type',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Heating Fuel',
                'parent_id' => NULL,
                'created_at' => '2018-06-27 17:18:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Indoor Features',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Rooms',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Building/Development Amenities',
                'parent_id' => NULL,
                'created_at' => '2018-06-27 17:18:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Architectural Style',
                'parent_id' => NULL,
                'created_at' => '2018-06-27 17:16:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Exterior',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Outdoor Amenities',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Parking',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Roof Type',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'View',
                'parent_id' => NULL,
                'created_at' => '2018-05-04 15:50:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'Dishwasher',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'Dryer',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'name' => 'Freezer',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'name' => 'Garbage disposal',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'name' => 'Microwave',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'Range / Oven',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'Refrigerator',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'name' => 'Trash compactor',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 28,
                'name' => 'Washer',
                'parent_id' => 2,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 29,
                'name' => 'Central',
                'parent_id' => 3,
                'created_at' => '2018-05-01 13:26:11',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 30,
                'name' => 'Evaporative',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 31,
                'name' => 'Geothermal',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 32,
                'name' => 'Refrigeration',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 33,
                'name' => 'Solar',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 34,
                'name' => 'Wall',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 35,
                'name' => 'Other',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 36,
                'name' => 'None',
                'parent_id' => 3,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 37,
                'name' => 'Carpet',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 38,
                'name' => 'Concrete',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 39,
                'name' => 'Hardwood',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:20:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 40,
                'name' => 'Laminate',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 41,
                'name' => 'Linoleum/Vinyl',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 42,
                'name' => 'Slate',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 43,
                'name' => 'Softwood',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 44,
                'name' => 'Tile',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 45,
                'name' => 'Other',
                'parent_id' => 4,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 46,
                'name' => 'Baseboard',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 47,
                'name' => 'Forced Air',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 48,
                'name' => 'Heat Pump',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 49,
                'name' => 'Radiant',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:22:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 50,
                'name' => 'Stove',
                'parent_id' => 5,
                'created_at' => '2018-09-24 16:36:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 51,
                'name' => 'Wall',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 52,
                'name' => 'Other',
                'parent_id' => 5,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 53,
                'name' => 'Coal',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 54,
                'name' => 'Electric',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 55,
                'name' => 'Gas',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 56,
                'name' => 'Oil',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 57,
                'name' => 'Propane / butane',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 58,
                'name' => 'Solor',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 59,
                'name' => 'Wood / Pellet',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 60,
                'name' => 'Other',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 61,
                'name' => 'None',
                'parent_id' => 6,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 62,
                'name' => 'Attic',
                'parent_id' => 7,
                'created_at' => '2018-05-01 13:35:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 63,
                'name' => 'Cable Ready',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 64,
                'name' => 'Ceiling Fans',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 65,
                'name' => 'Fireplace',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 66,
                'name' => 'Intercom System',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 67,
                'name' => 'Jetted Jub',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 68,
                'name' => 'Security System',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 69,
                'name' => 'Skylights',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 70,
                'name' => 'Vaulted Ceiling',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 71,
                'name' => 'Wet Bar',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 72,
                'name' => 'Wired',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 73,
                'name' => 'Double Pane / storm Windows',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 74,
                'name' => 'Mother In Law Apartment',
                'parent_id' => 7,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 75,
                'name' => 'Breakfast Nook',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 76,
                'name' => 'Dining Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 77,
                'name' => 'Family Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 78,
                'name' => 'Laundry Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 79,
                'name' => 'Library',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 80,
                'name' => 'Master Bath',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 81,
                'name' => 'Mud Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 82,
                'name' => 'Office',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 83,
                'name' => 'Pantry',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 84,
                'name' => 'Recreation Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 85,
                'name' => 'Workshop',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 86,
                'name' => 'Solarium / Atrium',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 87,
                'name' => 'Sun Room',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 88,
                'name' => 'Walk In Closet',
                'parent_id' => 8,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 89,
                'name' => 'Basketball Court',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 90,
                'name' => 'Controlled Access',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 91,
                'name' => 'Disabled Access',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 92,
                'name' => 'Doorman',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 93,
                'name' => 'Elevator',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 94,
                'name' => 'Fitness Center',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 95,
                'name' => 'Gated Entry',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 96,
                'name' => 'Sports Court',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 97,
                'name' => 'Storage',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 98,
                'name' => 'Tennis Court',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 99,
                'name' => 'Assisted Living Community',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 100,
                'name' => 'Over 55+ Active Community',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:27:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 101,
                'name' => 'Near Transportation',
                'parent_id' => 9,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 102,
                'name' => 'Bungalow',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 103,
                'name' => 'Cape Cod',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 104,
                'name' => 'Colonial',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 105,
                'name' => 'Contemporary',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 106,
                'name' => 'Craftsman',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 107,
                'name' => 'French',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 108,
                'name' => 'Georgian',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 109,
                'name' => 'Loft',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 110,
                'name' => 'Modern',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 111,
                'name' => 'Ranch / Rambler',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 112,
                'name' => 'Spanish',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 113,
                'name' => 'Split Level',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 114,
                'name' => 'Tudor',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 115,
                'name' => 'Other',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 116,
                'name' => 'Queen Anne / Victorian',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:29:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 117,
                'name' => 'Santa Fe / Pueblo Style',
                'parent_id' => 10,
                'created_at' => '2018-05-01 15:09:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 118,
                'name' => 'Brick',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 119,
                'name' => 'Cement / Concrete',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:14',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 120,
                'name' => 'Composition',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 121,
                'name' => 'Metal',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 122,
                'name' => 'Shingle',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:40',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 123,
                'name' => 'Stone',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 124,
                'name' => 'Stucco',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:10:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 125,
                'name' => 'Vinyl',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:11:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 126,
                'name' => 'Wood',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:11:13',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 127,
                'name' => 'Wood products',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:11:24',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 128,
                'name' => 'Other',
                'parent_id' => 11,
                'created_at' => '2018-05-01 15:11:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 129,
                'name' => 'Balcony/patio',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 130,
                'name' => 'Barbecue area',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 131,
                'name' => 'Deck',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 132,
                'name' => 'Dock',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 133,
                'name' => 'Fenced yard',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:40',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 134,
                'name' => 'Garden',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:49',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 135,
                'name' => 'Greenhouse',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:12:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 136,
                'name' => 'Hot tub/spa',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 137,
                'name' => 'Lawn',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:14',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 138,
                'name' => 'Pond',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 139,
                'name' => 'Pool',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 140,
                'name' => 'Porch',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 141,
                'name' => 'RV parking',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:13:49',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 142,
                'name' => 'Sauna',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:14:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 143,
                'name' => 'Sprinkler system',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:14:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 144,
                'name' => 'Waterfront',
                'parent_id' => 12,
                'created_at' => '2018-05-01 15:14:20',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 145,
                'name' => 'Carport',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:14:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 146,
                'name' => 'Garage - Attached',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:14:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 147,
                'name' => 'Garage - Detached',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:14:51',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 148,
                'name' => 'Off-street',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:15:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 149,
                'name' => 'On-street',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:15:14',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 150,
                'name' => 'None',
                'parent_id' => 13,
                'created_at' => '2018-05-01 15:15:22',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 151,
                'name' => 'Asphalt',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:15:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 152,
                'name' => 'Built-up',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:15:42',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 153,
                'name' => 'Composition',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:15:51',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 154,
                'name' => 'Metal',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:16:03',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 155,
                'name' => 'Shake / Shingle',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:16:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 156,
                'name' => 'Slate',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:16:20',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 157,
                'name' => 'Tile',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:16:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 158,
                'name' => 'Other',
                'parent_id' => 14,
                'created_at' => '2018-05-01 15:16:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 159,
                'name' => 'City',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:16:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 160,
                'name' => 'Mountain',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:17:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 161,
                'name' => 'Park',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:17:16',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 162,
                'name' => 'Territorial',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:17:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 163,
                'name' => 'Water',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:17:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 164,
                'name' => 'None',
                'parent_id' => 15,
                'created_at' => '2018-05-01 15:17:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}