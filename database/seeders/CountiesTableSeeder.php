<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('counties')->delete();
        
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state_id' => 32,
                'county' => 'Suffolk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'state_id' => 21,
                'county' => 'Hampden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'state_id' => 21,
                'county' => 'Hampshire County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state_id' => 21,
                'county' => 'Worcester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state_id' => 21,
                'county' => 'Berkshire County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state_id' => 21,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'state_id' => 21,
                'county' => 'Middlesex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'state_id' => 21,
                'county' => 'Essex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'state_id' => 21,
                'county' => 'Plymouth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'state_id' => 21,
                'county' => 'Norfolk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'state_id' => 21,
                'county' => 'Bristol County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'state_id' => 21,
                'county' => 'Suffolk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'state_id' => 21,
                'county' => 'Barnstable County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'state_id' => 21,
                'county' => 'Dukes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'state_id' => 21,
                'county' => 'Nantucket County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'state_id' => 39,
                'county' => 'Newport County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'state_id' => 39,
                'county' => 'Providence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'state_id' => 39,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'state_id' => 39,
                'county' => 'Bristol County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'state_id' => 39,
                'county' => 'Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'state_id' => 29,
                'county' => 'Hillsborough County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'state_id' => 29,
                'county' => 'Rockingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'state_id' => 29,
                'county' => 'Merrimack County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'state_id' => 29,
                'county' => 'Grafton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'state_id' => 29,
                'county' => 'Belknap County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'state_id' => 29,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'state_id' => 29,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'state_id' => 29,
                'county' => 'Cheshire County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'state_id' => 29,
                'county' => 'Coos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'state_id' => 29,
                'county' => 'CoÃ¶s County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'state_id' => 29,
                'county' => 'Strafford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'state_id' => 19,
                'county' => 'York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'state_id' => 19,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'state_id' => 19,
                'county' => 'Sagadahoc County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'state_id' => 19,
                'county' => 'Oxford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'state_id' => 19,
                'county' => 'Androscoggin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'state_id' => 19,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'state_id' => 19,
                'county' => 'Kennebec County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'state_id' => 19,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'state_id' => 19,
                'county' => 'Waldo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'state_id' => 19,
                'county' => 'Penobscot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'state_id' => 19,
                'county' => 'Piscataquis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'state_id' => 19,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'state_id' => 19,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'state_id' => 19,
                'county' => 'Aroostook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'state_id' => 19,
                'county' => 'Somerset County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'state_id' => 19,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'state_id' => 45,
                'county' => 'Windsor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'state_id' => 45,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'state_id' => 45,
                'county' => 'Caledonia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'state_id' => 45,
                'county' => 'Windham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'state_id' => 45,
                'county' => 'Bennington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'state_id' => 45,
                'county' => 'Chittenden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'state_id' => 45,
                'county' => 'Grand Isle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'state_id' => 45,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'state_id' => 45,
                'county' => 'Lamoille County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'state_id' => 45,
                'county' => 'Addison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'state_id' => 45,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'state_id' => 45,
                'county' => 'Rutland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'state_id' => 45,
                'county' => 'Orleans County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'state_id' => 45,
                'county' => 'Essex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'state_id' => 7,
                'county' => 'Hartford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'state_id' => 7,
                'county' => 'Litchfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'state_id' => 7,
                'county' => 'Tolland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'state_id' => 7,
                'county' => 'Windham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'state_id' => 7,
                'county' => 'New London County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'state_id' => 7,
                'county' => 'New Haven County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'state_id' => 7,
                'county' => 'Fairfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'state_id' => 7,
                'county' => 'Middlesex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'state_id' => 30,
                'county' => 'Middlesex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'state_id' => 30,
                'county' => 'Hudson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'state_id' => 30,
                'county' => 'Essex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'state_id' => 30,
                'county' => 'Morris County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'state_id' => 30,
                'county' => 'Bergen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'state_id' => 30,
                'county' => 'Passaic County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'state_id' => 30,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'state_id' => 30,
                'county' => 'Somerset County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'state_id' => 30,
                'county' => 'Sussex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'state_id' => 30,
                'county' => 'Monmouth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'state_id' => 30,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'state_id' => 30,
                'county' => 'Hunterdon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'state_id' => 30,
                'county' => 'Salem County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'state_id' => 30,
                'county' => 'Camden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'state_id' => 30,
                'county' => 'Ocean County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'state_id' => 30,
                'county' => 'Burlington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'state_id' => 30,
                'county' => 'Gloucester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'state_id' => 30,
                'county' => 'Atlantic County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'state_id' => 30,
                'county' => 'Cape May County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'state_id' => 30,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'state_id' => 30,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'state_id' => 32,
                'county' => 'New York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'state_id' => 32,
                'county' => 'Richmond County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'state_id' => 32,
                'county' => 'Bronx County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'state_id' => 32,
                'county' => 'Westchester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'state_id' => 32,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'state_id' => 32,
                'county' => 'Rockland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'state_id' => 32,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'state_id' => 32,
                'county' => 'Nassau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'state_id' => 32,
                'county' => 'Queens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'state_id' => 32,
                'county' => 'Kings County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'state_id' => 32,
                'county' => 'Albany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'state_id' => 32,
                'county' => 'Schenectady County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'state_id' => 32,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'state_id' => 32,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'state_id' => 32,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'state_id' => 32,
                'county' => 'Rensselaer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'state_id' => 32,
                'county' => 'Saratoga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'state_id' => 32,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'state_id' => 32,
                'county' => 'Schoharie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'state_id' => 32,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'state_id' => 32,
                'county' => 'Otsego County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'state_id' => 32,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'state_id' => 32,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'state_id' => 32,
                'county' => 'Ulster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'state_id' => 32,
                'county' => 'Dutchess County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'state_id' => 32,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'state_id' => 32,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'state_id' => 32,
                'county' => 'Essex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'state_id' => 32,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'state_id' => 32,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'state_id' => 32,
                'county' => 'St Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'state_id' => 32,
                'county' => 'Onondaga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'state_id' => 32,
                'county' => 'Cayuga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'state_id' => 32,
                'county' => 'Oswego County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'state_id' => 32,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'state_id' => 32,
                'county' => 'Cortland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'state_id' => 32,
                'county' => 'Oneida County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'state_id' => 32,
                'county' => 'Tompkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'state_id' => 32,
                'county' => 'Seneca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'state_id' => 32,
                'county' => 'Chenango County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'state_id' => 32,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'state_id' => 32,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'state_id' => 32,
                'county' => 'Herkimer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'state_id' => 32,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'state_id' => 32,
                'county' => 'Tioga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'state_id' => 32,
                'county' => 'Broome County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'state_id' => 32,
                'county' => 'Erie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'state_id' => 32,
                'county' => 'Genesee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'state_id' => 32,
                'county' => 'Niagara County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'state_id' => 32,
                'county' => 'Wyoming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'state_id' => 32,
                'county' => 'Allegany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'state_id' => 32,
                'county' => 'Cattaraugus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'state_id' => 32,
                'county' => 'Chautauqua County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'state_id' => 32,
                'county' => 'Orleans County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'state_id' => 32,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'state_id' => 32,
                'county' => 'Livingston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'state_id' => 32,
                'county' => 'Yates County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'state_id' => 32,
                'county' => 'Ontario County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'state_id' => 32,
                'county' => 'Steuben County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'state_id' => 32,
                'county' => 'Schuyler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'state_id' => 32,
                'county' => 'Chemung County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'state_id' => 38,
                'county' => 'Beaver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'state_id' => 38,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'state_id' => 38,
                'county' => 'Allegheny County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'state_id' => 38,
                'county' => 'Westmoreland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'state_id' => 38,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'state_id' => 38,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'state_id' => 38,
                'county' => 'Somerset County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'state_id' => 38,
                'county' => 'Monongalia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'state_id' => 38,
                'county' => 'Bedford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'state_id' => 38,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'state_id' => 38,
                'county' => 'Armstrong County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'state_id' => 38,
                'county' => 'Indiana County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'state_id' => 38,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'state_id' => 38,
                'county' => 'Cambria County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'state_id' => 38,
                'county' => 'Clearfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'state_id' => 38,
                'county' => 'Elk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'state_id' => 38,
                'county' => 'Forest County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'state_id' => 38,
                'county' => 'Cameron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'state_id' => 38,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'state_id' => 38,
                'county' => 'Clarion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'state_id' => 38,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'state_id' => 38,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'state_id' => 38,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'state_id' => 38,
                'county' => 'Mahoning County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'state_id' => 38,
                'county' => 'Venango County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'state_id' => 38,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'state_id' => 38,
                'county' => 'McKean County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'state_id' => 38,
                'county' => 'Erie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'state_id' => 38,
                'county' => 'Blair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'state_id' => 38,
                'county' => 'Huntingdon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'state_id' => 38,
                'county' => 'Centre County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'state_id' => 38,
                'county' => 'Potter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'state_id' => 38,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'state_id' => 38,
                'county' => 'Tioga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'state_id' => 38,
                'county' => 'Bradford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'state_id' => 38,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'state_id' => 38,
                'county' => 'Lebanon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'state_id' => 38,
                'county' => 'Mifflin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'state_id' => 38,
                'county' => 'Dauphin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'state_id' => 38,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'state_id' => 38,
                'county' => 'Juniata County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'state_id' => 38,
                'county' => 'Northumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'state_id' => 38,
                'county' => 'York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'state_id' => 38,
                'county' => 'Lancaster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'state_id' => 38,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'state_id' => 38,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'state_id' => 38,
                'county' => 'Lycoming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'state_id' => 38,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'state_id' => 38,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'state_id' => 38,
                'county' => 'Snyder County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'state_id' => 38,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'state_id' => 38,
                'county' => 'Montour County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'state_id' => 38,
                'county' => 'Schuylkill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'state_id' => 38,
                'county' => 'Lehigh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'state_id' => 38,
                'county' => 'Northampton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'state_id' => 38,
                'county' => 'Berks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'state_id' => 38,
                'county' => 'Carbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'state_id' => 38,
                'county' => 'Bucks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'state_id' => 38,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'state_id' => 38,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'state_id' => 38,
                'county' => 'Luzerne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'state_id' => 38,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'state_id' => 38,
                'county' => 'Lackawanna County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'state_id' => 38,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'state_id' => 38,
                'county' => 'Susquehanna County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'state_id' => 38,
                'county' => 'Wyoming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'state_id' => 38,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'state_id' => 38,
                'county' => 'Philadelphia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'state_id' => 38,
                'county' => 'Chester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'state_id' => 8,
                'county' => 'New Castle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'state_id' => 8,
                'county' => 'Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'state_id' => 8,
                'county' => 'Sussex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'state_id' => 51,
                'county' => 'District of Columbia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'state_id' => 46,
                'county' => 'Loudoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'state_id' => 46,
                'county' => 'Rappahannock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'state_id' => 46,
                'county' => 'Manassas City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'state_id' => 46,
                'county' => 'Prince William County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'state_id' => 46,
                'county' => 'Manassas Park City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'state_id' => 46,
                'county' => 'Fauquier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'state_id' => 46,
                'county' => 'Fairfax County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'state_id' => 46,
                'county' => 'Clarke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'state_id' => 20,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'state_id' => 20,
                'county' => 'Charles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'state_id' => 20,
                'county' => 'St Mary`s County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'state_id' => 20,
                'county' => 'Prince George`s County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'state_id' => 20,
                'county' => 'Calvert County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'state_id' => 20,
                'county' => 'Anne Arundel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'state_id' => 20,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'state_id' => 20,
                'county' => 'Harford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'state_id' => 20,
                'county' => 'Baltimore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'state_id' => 20,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'state_id' => 20,
                'county' => 'Baltimore City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'state_id' => 20,
                'county' => 'Allegany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'state_id' => 20,
                'county' => 'Garrett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'state_id' => 20,
                'county' => 'Mineral County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'state_id' => 20,
                'county' => 'Talbot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'state_id' => 20,
                'county' => 'Queen Anne`s County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'state_id' => 20,
                'county' => 'Caroline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'state_id' => 20,
                'county' => 'Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'state_id' => 20,
                'county' => 'Dorchester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'state_id' => 20,
                'county' => 'Frederick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'state_id' => 20,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'state_id' => 20,
                'county' => 'Wicomico County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'state_id' => 20,
                'county' => 'Somerset County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'state_id' => 20,
                'county' => 'Worcester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'state_id' => 20,
                'county' => 'Cecil County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'state_id' => 46,
                'county' => 'Fairfax City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'state_id' => 46,
                'county' => 'Falls Church City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'state_id' => 46,
                'county' => 'Arlington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'state_id' => 46,
                'county' => 'Alexandria City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'state_id' => 46,
                'county' => 'Fredericksburg City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'state_id' => 46,
                'county' => 'Stafford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'state_id' => 46,
                'county' => 'Spotsylvania County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'state_id' => 46,
                'county' => 'Caroline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'state_id' => 46,
                'county' => 'Northumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'state_id' => 46,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'state_id' => 46,
                'county' => 'Essex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'state_id' => 46,
                'county' => 'Westmoreland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'state_id' => 46,
                'county' => 'King George County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'state_id' => 46,
                'county' => 'Richmond County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'state_id' => 46,
                'county' => 'Lancaster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'state_id' => 46,
                'county' => 'Winchester City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'state_id' => 46,
                'county' => 'Frederick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'state_id' => 46,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'state_id' => 46,
                'county' => 'Shenandoah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'state_id' => 46,
                'county' => 'Page County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'state_id' => 46,
                'county' => 'Culpeper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'state_id' => 46,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'state_id' => 46,
                'county' => 'Harrisonburg City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'state_id' => 46,
                'county' => 'Rockingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'state_id' => 46,
                'county' => 'Augusta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'state_id' => 46,
                'county' => 'Albemarle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'state_id' => 46,
                'county' => 'Charlottesville City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'state_id' => 46,
                'county' => 'Nelson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'state_id' => 46,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'state_id' => 46,
                'county' => 'Louisa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'state_id' => 46,
                'county' => 'Fluvanna County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'state_id' => 46,
                'county' => 'Waynesboro City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'state_id' => 46,
                'county' => 'Gloucester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'state_id' => 46,
                'county' => 'Amelia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'state_id' => 46,
                'county' => 'Buckingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'state_id' => 46,
                'county' => 'Hanover County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'state_id' => 46,
                'county' => 'King William County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'state_id' => 46,
                'county' => 'New Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'state_id' => 46,
                'county' => 'Powhatan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'state_id' => 46,
                'county' => 'Mathews County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'state_id' => 46,
                'county' => 'King and Queen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'state_id' => 46,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'state_id' => 46,
                'county' => 'Charles City County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'state_id' => 46,
                'county' => 'Middlesex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'state_id' => 46,
                'county' => 'Goochland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'state_id' => 46,
                'county' => 'Henrico County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'state_id' => 46,
                'county' => 'James City County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'state_id' => 46,
                'county' => 'James City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'state_id' => 46,
                'county' => 'Chesterfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'state_id' => 46,
                'county' => 'Charles City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'state_id' => 46,
                'county' => 'Richmond City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'state_id' => 46,
                'county' => 'Williamsburg City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'state_id' => 46,
                'county' => 'Accomack County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'state_id' => 46,
                'county' => 'Isle of Wight County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'state_id' => 46,
                'county' => 'Northampton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'state_id' => 46,
                'county' => 'Chesapeake City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'state_id' => 46,
                'county' => 'Suffolk City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'state_id' => 46,
                'county' => 'Virginia Beach City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'state_id' => 46,
                'county' => 'Norfolk City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'state_id' => 46,
                'county' => 'Newport News City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'state_id' => 46,
                'county' => 'Hampton City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'state_id' => 46,
                'county' => 'Poquoson City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'state_id' => 46,
                'county' => 'York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'state_id' => 46,
                'county' => 'Portsmouth City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'state_id' => 46,
                'county' => 'Prince George County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'state_id' => 46,
                'county' => 'Petersburg City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'state_id' => 46,
                'county' => 'Brunswick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'state_id' => 46,
                'county' => 'Nottoway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'state_id' => 46,
                'county' => 'Southampton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'state_id' => 46,
                'county' => 'Dinwiddie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'state_id' => 46,
                'county' => 'Colonial Heights City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'state_id' => 46,
                'county' => 'Surry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'state_id' => 46,
                'county' => 'Emporia City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'state_id' => 46,
                'county' => 'Franklin City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'state_id' => 46,
                'county' => 'Hopewell City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'state_id' => 46,
                'county' => 'Greensville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'state_id' => 46,
                'county' => 'Sussex County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'state_id' => 46,
                'county' => 'Prince Edward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'state_id' => 46,
                'county' => 'Mecklenburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'state_id' => 46,
                'county' => 'Charlotte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'state_id' => 46,
                'county' => 'Appomattox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'state_id' => 46,
                'county' => 'Lunenburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'state_id' => 46,
                'county' => 'Roanoke City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'state_id' => 46,
                'county' => 'Roanoke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'state_id' => 46,
                'county' => 'Patrick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'state_id' => 46,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'state_id' => 46,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'state_id' => 46,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'state_id' => 46,
                'county' => 'Botetourt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'state_id' => 46,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'state_id' => 46,
                'county' => 'Pittsylvania County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'state_id' => 46,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'state_id' => 46,
                'county' => 'Giles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'state_id' => 46,
                'county' => 'Bedford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'state_id' => 46,
                'county' => 'Martinsville City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'state_id' => 46,
                'county' => 'Craig County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'state_id' => 46,
                'county' => 'Radford City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'state_id' => 46,
                'county' => 'Salem City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'state_id' => 46,
                'county' => 'Bristol City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'state_id' => 46,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'state_id' => 46,
                'county' => 'Wise County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'state_id' => 46,
                'county' => 'Dickenson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'state_id' => 46,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'state_id' => 46,
                'county' => 'Russell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'state_id' => 46,
                'county' => 'Buchanan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'state_id' => 46,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'state_id' => 46,
                'county' => 'Norton City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'state_id' => 46,
                'county' => 'Grayson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'state_id' => 46,
                'county' => 'Smyth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'state_id' => 46,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'state_id' => 46,
                'county' => 'Wythe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'state_id' => 46,
                'county' => 'Bland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'state_id' => 46,
                'county' => 'Tazewell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'state_id' => 46,
                'county' => 'Galax City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'state_id' => 46,
                'county' => 'Staunton City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'state_id' => 46,
                'county' => 'Bath County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'state_id' => 46,
                'county' => 'Highland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'state_id' => 46,
                'county' => 'Rockbridge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'state_id' => 46,
                'county' => 'Buena Vista City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'state_id' => 46,
                'county' => 'Alleghany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'state_id' => 46,
                'county' => 'Lynchburg City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'state_id' => 46,
                'county' => 'Campbell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'state_id' => 46,
                'county' => 'Halifax County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'state_id' => 46,
                'county' => 'Amherst County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'state_id' => 46,
                'county' => 'Bedford City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'state_id' => 46,
                'county' => 'Danville City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'state_id' => 46,
                'county' => 'McDowell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'state_id' => 48,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'state_id' => 48,
                'county' => 'Wyoming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'state_id' => 48,
                'county' => 'McDowell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'state_id' => 48,
                'county' => 'Mingo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'state_id' => 48,
                'county' => 'Greenbrier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'state_id' => 48,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'state_id' => 48,
                'county' => 'Pocahontas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'state_id' => 48,
                'county' => 'Summers County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'state_id' => 48,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'state_id' => 48,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'state_id' => 48,
                'county' => 'Roane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'state_id' => 48,
                'county' => 'Raleigh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'state_id' => 48,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'state_id' => 48,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'state_id' => 48,
                'county' => 'Kanawha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'state_id' => 48,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'state_id' => 48,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'state_id' => 48,
                'county' => 'Nicholas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'state_id' => 48,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'state_id' => 48,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'state_id' => 48,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'state_id' => 48,
                'county' => 'Gilmer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'state_id' => 48,
                'county' => 'Berkeley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'state_id' => 48,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'state_id' => 48,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'state_id' => 48,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'state_id' => 48,
                'county' => 'Hampshire County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'state_id' => 48,
                'county' => 'Cabell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'state_id' => 48,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'state_id' => 48,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'state_id' => 48,
                'county' => 'Ohio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'state_id' => 48,
                'county' => 'Brooke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'state_id' => 48,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'state_id' => 48,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'state_id' => 48,
                'county' => 'Wood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'state_id' => 48,
                'county' => 'Pleasants County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'state_id' => 48,
                'county' => 'Ritchie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'state_id' => 48,
                'county' => 'Wirt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'state_id' => 48,
                'county' => 'Tyler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'state_id' => 48,
                'county' => 'Wetzel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'state_id' => 48,
                'county' => 'Upshur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'state_id' => 48,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'state_id' => 48,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'state_id' => 48,
                'county' => 'Barbour County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'state_id' => 48,
                'county' => 'Tucker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'state_id' => 48,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'state_id' => 48,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'state_id' => 48,
                'county' => 'Braxton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'state_id' => 48,
                'county' => 'Doddridge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'state_id' => 48,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'state_id' => 48,
                'county' => 'Preston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'state_id' => 48,
                'county' => 'Monongalia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'state_id' => 48,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'state_id' => 48,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'state_id' => 48,
                'county' => 'Mineral County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'state_id' => 48,
                'county' => 'Hardy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'state_id' => 48,
                'county' => 'Pendleton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'state_id' => 33,
                'county' => 'Davie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'state_id' => 33,
                'county' => 'Surry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'state_id' => 33,
                'county' => 'Forsyth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'state_id' => 33,
                'county' => 'Yadkin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'state_id' => 33,
                'county' => 'Rowan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'state_id' => 33,
                'county' => 'Stokes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'state_id' => 33,
                'county' => 'Rockingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'state_id' => 33,
                'county' => 'Alamance County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'state_id' => 33,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'state_id' => 33,
                'county' => 'Chatham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'state_id' => 33,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'state_id' => 33,
                'county' => 'Caswell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'state_id' => 33,
                'county' => 'Guilford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'state_id' => 33,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'state_id' => 33,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'state_id' => 33,
                'county' => 'Davidson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'state_id' => 33,
                'county' => 'Moore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'state_id' => 33,
                'county' => 'Person County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'state_id' => 33,
                'county' => 'Harnett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'state_id' => 33,
                'county' => 'Wake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'state_id' => 33,
                'county' => 'Durham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'state_id' => 33,
                'county' => 'Johnston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'state_id' => 33,
                'county' => 'Granville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'state_id' => 33,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'state_id' => 33,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'state_id' => 33,
                'county' => 'Vance County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'state_id' => 33,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'state_id' => 33,
                'county' => 'Nash County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'state_id' => 33,
                'county' => 'Edgecombe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'state_id' => 33,
                'county' => 'Bertie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'state_id' => 33,
                'county' => 'Beaufort County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'state_id' => 33,
                'county' => 'Pitt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'state_id' => 33,
                'county' => 'Wilson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'state_id' => 33,
                'county' => 'Hertford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'state_id' => 33,
                'county' => 'Northampton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'state_id' => 33,
                'county' => 'Halifax County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'state_id' => 33,
                'county' => 'Hyde County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'state_id' => 33,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'state_id' => 33,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'state_id' => 33,
                'county' => 'Pasquotank County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'state_id' => 33,
                'county' => 'Dare County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'state_id' => 33,
                'county' => 'Currituck County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'state_id' => 33,
                'county' => 'Perquimans County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'state_id' => 33,
                'county' => 'Camden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'state_id' => 33,
                'county' => 'Tyrrell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'state_id' => 33,
                'county' => 'Gates County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'state_id' => 33,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'state_id' => 33,
                'county' => 'Chowan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'state_id' => 33,
                'county' => 'Stanly County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'state_id' => 33,
                'county' => 'Gaston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'state_id' => 33,
                'county' => 'Anson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'state_id' => 33,
                'county' => 'Iredell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'state_id' => 33,
                'county' => 'Cleveland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'state_id' => 33,
                'county' => 'Rutherford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'state_id' => 33,
                'county' => 'Cabarrus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'state_id' => 33,
                'county' => 'Mecklenburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'state_id' => 33,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'state_id' => 33,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'state_id' => 33,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 501,
                'state_id' => 33,
                'county' => 'Sampson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'state_id' => 33,
                'county' => 'Robeson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'state_id' => 33,
                'county' => 'Bladen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'state_id' => 33,
                'county' => 'Duplin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'state_id' => 33,
                'county' => 'Richmond County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'state_id' => 33,
                'county' => 'Scotland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'state_id' => 33,
                'county' => 'Hoke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'state_id' => 33,
                'county' => 'New Hanover County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'state_id' => 33,
                'county' => 'Brunswick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'state_id' => 33,
                'county' => 'Pender County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'state_id' => 33,
                'county' => 'Columbus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'state_id' => 33,
                'county' => 'Onslow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'state_id' => 33,
                'county' => 'Lenoir County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'state_id' => 33,
                'county' => 'Pamlico County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'state_id' => 33,
                'county' => 'Carteret County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'state_id' => 33,
                'county' => 'Craven County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'state_id' => 33,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'state_id' => 33,
                'county' => 'Catawba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'state_id' => 33,
                'county' => 'Avery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'state_id' => 33,
                'county' => 'Watauga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'state_id' => 33,
                'county' => 'Wilkes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'state_id' => 33,
                'county' => 'Burke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'state_id' => 33,
                'county' => 'Ashe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'state_id' => 33,
                'county' => 'Alleghany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'state_id' => 33,
                'county' => 'Caldwell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'state_id' => 33,
                'county' => 'Alexander County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'state_id' => 33,
                'county' => 'Buncombe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'state_id' => 33,
                'county' => 'Graham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'state_id' => 33,
                'county' => 'Mitchell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'state_id' => 33,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'state_id' => 33,
                'county' => 'Transylvania County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'state_id' => 33,
                'county' => 'Henderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'state_id' => 33,
                'county' => 'Swain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'state_id' => 33,
                'county' => 'Yancey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'state_id' => 33,
                'county' => 'Haywood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'state_id' => 33,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'state_id' => 33,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'state_id' => 33,
                'county' => 'McDowell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'state_id' => 33,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'state_id' => 33,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'state_id' => 33,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'state_id' => 40,
                'county' => 'Clarendon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'state_id' => 40,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'state_id' => 40,
                'county' => 'Bamberg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'state_id' => 40,
                'county' => 'Lexington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'state_id' => 40,
                'county' => 'Kershaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'state_id' => 40,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'state_id' => 40,
                'county' => 'Chester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'state_id' => 40,
                'county' => 'Fairfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'state_id' => 40,
                'county' => 'Orangeburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'state_id' => 40,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'state_id' => 40,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'state_id' => 40,
                'county' => 'Newberry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'state_id' => 40,
                'county' => 'Sumter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'state_id' => 40,
                'county' => 'Williamsburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'state_id' => 40,
                'county' => 'Lancaster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'state_id' => 40,
                'county' => 'Darlington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'state_id' => 40,
                'county' => 'Colleton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'state_id' => 40,
                'county' => 'Chesterfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'state_id' => 40,
                'county' => 'Aiken County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'state_id' => 40,
                'county' => 'Florence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'state_id' => 40,
                'county' => 'Saluda County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'state_id' => 40,
                'county' => 'Spartanburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'state_id' => 40,
                'county' => 'Laurens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'state_id' => 40,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'state_id' => 40,
                'county' => 'Greenville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'state_id' => 40,
                'county' => 'Charleston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'state_id' => 40,
                'county' => 'Berkeley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'state_id' => 40,
                'county' => 'Dorchester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'state_id' => 40,
                'county' => 'Georgetown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'state_id' => 40,
                'county' => 'Horry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'state_id' => 40,
                'county' => 'Marlboro County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'state_id' => 40,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'state_id' => 40,
                'county' => 'Dillon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'state_id' => 40,
                'county' => 'Abbeville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'state_id' => 40,
                'county' => 'Anderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'state_id' => 40,
                'county' => 'Pickens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'state_id' => 40,
                'county' => 'Oconee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'state_id' => 40,
                'county' => 'Greenwood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'state_id' => 40,
                'county' => 'York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'state_id' => 40,
                'county' => 'Allendale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'state_id' => 40,
                'county' => 'Barnwell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'state_id' => 40,
                'county' => 'McCormick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'state_id' => 40,
                'county' => 'Edgefield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'state_id' => 40,
                'county' => 'Beaufort County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'state_id' => 40,
                'county' => 'Hampton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'state_id' => 40,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'state_id' => 10,
                'county' => 'Dekalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'state_id' => 10,
                'county' => 'Gwinnett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'state_id' => 10,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'state_id' => 10,
                'county' => 'Cobb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'state_id' => 10,
                'county' => 'Barrow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'state_id' => 10,
                'county' => 'Rockdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'state_id' => 10,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'state_id' => 10,
                'county' => 'Walton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'state_id' => 10,
                'county' => 'Forsyth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'state_id' => 10,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'state_id' => 10,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'state_id' => 10,
                'county' => 'Bartow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'state_id' => 10,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'state_id' => 10,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'state_id' => 10,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'state_id' => 10,
                'county' => 'Haralson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'state_id' => 10,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'state_id' => 10,
                'county' => 'Paulding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'state_id' => 10,
                'county' => 'Cleburne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'state_id' => 10,
                'county' => 'Gordon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'state_id' => 10,
                'county' => 'Pickens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'state_id' => 10,
                'county' => 'Lamar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'state_id' => 10,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'state_id' => 10,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'state_id' => 10,
                'county' => 'Spalding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'state_id' => 10,
                'county' => 'Butts County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'state_id' => 10,
                'county' => 'Heard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'state_id' => 10,
                'county' => 'Meriwether County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'state_id' => 10,
                'county' => 'Coweta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'state_id' => 10,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'state_id' => 10,
                'county' => 'Troup County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'state_id' => 10,
                'county' => 'Clayton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'state_id' => 10,
                'county' => 'Upson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'state_id' => 10,
                'county' => 'Emanuel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'state_id' => 10,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'state_id' => 10,
                'county' => 'Wheeler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'state_id' => 10,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'state_id' => 10,
                'county' => 'Evans County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'state_id' => 10,
                'county' => 'Bulloch County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'state_id' => 10,
                'county' => 'Tattnall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'state_id' => 10,
                'county' => 'Screven County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'state_id' => 10,
                'county' => 'Jenkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'state_id' => 10,
                'county' => 'Burke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'state_id' => 10,
                'county' => 'Toombs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'state_id' => 10,
                'county' => 'Candler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'state_id' => 10,
                'county' => 'Laurens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'state_id' => 10,
                'county' => 'Treutlen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'state_id' => 10,
                'county' => 'Hall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'state_id' => 10,
                'county' => 'Habersham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'state_id' => 10,
                'county' => 'Banks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'state_id' => 10,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'state_id' => 10,
                'county' => 'Fannin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'state_id' => 10,
                'county' => 'Hart County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'state_id' => 10,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'state_id' => 10,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'state_id' => 10,
                'county' => 'Gilmer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'state_id' => 10,
                'county' => 'Rabun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'state_id' => 10,
                'county' => 'White County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'state_id' => 10,
                'county' => 'Lumpkin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'state_id' => 10,
                'county' => 'Dawson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'state_id' => 10,
                'county' => 'Stephens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'state_id' => 10,
                'county' => 'Towns County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'state_id' => 10,
                'county' => 'Clarke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'state_id' => 10,
                'county' => 'Oglethorpe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'state_id' => 10,
                'county' => 'Oconee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'state_id' => 10,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'state_id' => 10,
                'county' => 'Elbert County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'state_id' => 10,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'state_id' => 10,
                'county' => 'Taliaferro County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'state_id' => 10,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'state_id' => 10,
                'county' => 'Wilkes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'state_id' => 10,
                'county' => 'Murray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'state_id' => 10,
                'county' => 'Walker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'state_id' => 10,
                'county' => 'Whitfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'state_id' => 10,
                'county' => 'Catoosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'state_id' => 10,
                'county' => 'Chattooga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'state_id' => 10,
                'county' => 'Dade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'state_id' => 10,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'state_id' => 10,
                'county' => 'Richmond County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'state_id' => 10,
                'county' => 'McDuffie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'state_id' => 10,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'state_id' => 10,
                'county' => 'Glascock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'state_id' => 10,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'state_id' => 10,
                'county' => 'Wilcox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'state_id' => 10,
                'county' => 'Wilkinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'state_id' => 10,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'state_id' => 10,
                'county' => 'Houston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'state_id' => 10,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'state_id' => 10,
                'county' => 'Dooly County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'state_id' => 10,
                'county' => 'Peach County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'state_id' => 10,
                'county' => 'Crisp County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'state_id' => 10,
                'county' => 'Dodge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'state_id' => 10,
                'county' => 'Bleckley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'state_id' => 10,
                'county' => 'Twiggs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'state_id' => 10,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'state_id' => 10,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'state_id' => 10,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'state_id' => 10,
                'county' => 'Baldwin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'state_id' => 10,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'state_id' => 10,
                'county' => 'Telfair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'state_id' => 10,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'state_id' => 10,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'state_id' => 10,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'state_id' => 10,
                'county' => 'Bibb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'state_id' => 10,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'state_id' => 10,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'state_id' => 10,
                'county' => 'Liberty County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'state_id' => 10,
                'county' => 'Effingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'state_id' => 10,
                'county' => 'McIntosh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'state_id' => 10,
                'county' => 'Bryan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'state_id' => 10,
                'county' => 'Long County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'state_id' => 10,
                'county' => 'Chatham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'state_id' => 10,
                'county' => 'Ware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'state_id' => 10,
                'county' => 'Bacon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'state_id' => 10,
                'county' => 'Coffee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'state_id' => 10,
                'county' => 'Appling County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'state_id' => 10,
                'county' => 'Pierce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'state_id' => 10,
                'county' => 'Glynn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'state_id' => 10,
                'county' => 'Jeff Davis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'state_id' => 10,
                'county' => 'Charlton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'state_id' => 10,
                'county' => 'Brantley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'state_id' => 10,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'state_id' => 10,
                'county' => 'Camden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'state_id' => 10,
                'county' => 'Lowndes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'state_id' => 10,
                'county' => 'Cook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'state_id' => 10,
                'county' => 'Berrien County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'state_id' => 10,
                'county' => 'Clinch County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'state_id' => 10,
                'county' => 'Atkinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'state_id' => 10,
                'county' => 'Brooks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'state_id' => 10,
                'county' => 'Thomas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'state_id' => 10,
                'county' => 'Lanier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'state_id' => 10,
                'county' => 'Echols County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'state_id' => 10,
                'county' => 'Dougherty County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'state_id' => 10,
                'county' => 'Sumter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'state_id' => 10,
                'county' => 'Turner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'state_id' => 10,
                'county' => 'Mitchell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'state_id' => 10,
                'county' => 'Colquitt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'state_id' => 10,
                'county' => 'Tift County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'state_id' => 10,
                'county' => 'Ben Hill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'state_id' => 10,
                'county' => 'Irwin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'state_id' => 10,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'state_id' => 10,
                'county' => 'Worth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'state_id' => 10,
                'county' => 'Talbot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'state_id' => 10,
                'county' => 'Harris County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'state_id' => 10,
                'county' => 'Chattahoochee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'state_id' => 10,
                'county' => 'Schley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'state_id' => 10,
                'county' => 'Stewart County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'state_id' => 10,
                'county' => 'Muscogee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'state_id' => 10,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'state_id' => 9,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'state_id' => 9,
                'county' => 'St Johns County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'state_id' => 9,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'state_id' => 9,
                'county' => 'Suwannee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'state_id' => 9,
                'county' => 'Nassau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'state_id' => 9,
                'county' => 'Lafayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'state_id' => 9,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'state_id' => 9,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'state_id' => 9,
                'county' => 'Baker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'state_id' => 9,
                'county' => 'Bradford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'state_id' => 9,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'state_id' => 9,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'state_id' => 9,
                'county' => 'Duval County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'state_id' => 9,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'state_id' => 9,
                'county' => 'Volusia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'state_id' => 9,
                'county' => 'Flagler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'state_id' => 9,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'state_id' => 9,
                'county' => 'Sumter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'state_id' => 9,
                'county' => 'Leon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'state_id' => 9,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'state_id' => 9,
                'county' => 'Liberty County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'state_id' => 9,
                'county' => 'Gadsden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'state_id' => 9,
                'county' => 'Wakulla County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'state_id' => 9,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'state_id' => 9,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'state_id' => 9,
                'county' => 'Bay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'state_id' => 9,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'state_id' => 9,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'state_id' => 9,
                'county' => 'Walton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'state_id' => 9,
                'county' => 'Holmes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'state_id' => 9,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'state_id' => 9,
                'county' => 'Gulf County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'state_id' => 9,
                'county' => 'Escambia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'state_id' => 9,
                'county' => 'Santa Rosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'state_id' => 9,
                'county' => 'Okaloosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'state_id' => 9,
                'county' => 'Alachua County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'state_id' => 9,
                'county' => 'Gilchrist County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'state_id' => 9,
                'county' => 'Levy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'state_id' => 9,
                'county' => 'Dixie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'state_id' => 9,
                'county' => 'Seminole County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'state_id' => 9,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'state_id' => 9,
                'county' => 'Brevard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'state_id' => 9,
                'county' => 'Indian River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'state_id' => 9,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'state_id' => 9,
                'county' => 'Miami-Dade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'state_id' => 9,
                'county' => 'Broward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'state_id' => 9,
                'county' => 'Palm Beach County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'state_id' => 9,
                'county' => 'Hendry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'state_id' => 9,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'state_id' => 9,
                'county' => 'Glades County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'state_id' => 9,
                'county' => 'Hillsborough County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'state_id' => 9,
                'county' => 'Pasco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'state_id' => 9,
                'county' => 'Pinellas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'state_id' => 9,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'state_id' => 9,
                'county' => 'Highlands County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'state_id' => 9,
                'county' => 'Hardee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'state_id' => 9,
                'county' => 'Osceola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'state_id' => 9,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'state_id' => 9,
                'county' => 'Charlotte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'state_id' => 9,
                'county' => 'Collier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'state_id' => 9,
                'county' => 'Manatee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'state_id' => 9,
                'county' => 'Sarasota County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'state_id' => 9,
                'county' => 'Desoto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'state_id' => 9,
                'county' => 'Citrus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'state_id' => 9,
                'county' => 'Hernando County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'state_id' => 9,
                'county' => 'St Lucie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'state_id' => 9,
                'county' => 'Okeechobee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'state_id' => 1,
                'county' => 'St Clair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'state_id' => 1,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'state_id' => 1,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'state_id' => 1,
                'county' => 'Tallapoosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'state_id' => 1,
                'county' => 'Blount County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'state_id' => 1,
                'county' => 'Talladega County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'state_id' => 1,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'state_id' => 1,
                'county' => 'Cullman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'state_id' => 1,
                'county' => 'Bibb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'state_id' => 1,
                'county' => 'Walker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'state_id' => 1,
                'county' => 'Chilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'state_id' => 1,
                'county' => 'Coosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'state_id' => 1,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'state_id' => 1,
                'county' => 'Tuscaloosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'state_id' => 1,
                'county' => 'Hale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'state_id' => 1,
                'county' => 'Pickens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'state_id' => 1,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'state_id' => 1,
                'county' => 'Sumter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'state_id' => 1,
                'county' => 'Winston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'state_id' => 1,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'state_id' => 1,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'state_id' => 1,
                'county' => 'Lamar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'state_id' => 1,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'state_id' => 1,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'state_id' => 1,
                'county' => 'Lauderdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'state_id' => 1,
                'county' => 'Limestone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'state_id' => 1,
                'county' => 'Colbert County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'state_id' => 1,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'state_id' => 1,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'state_id' => 1,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'state_id' => 1,
                'county' => 'Etowah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'state_id' => 1,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'state_id' => 1,
                'county' => 'Dekalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'state_id' => 1,
                'county' => 'Autauga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'state_id' => 1,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'state_id' => 1,
                'county' => 'Crenshaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'state_id' => 1,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'state_id' => 1,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'state_id' => 1,
                'county' => 'Barbour County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'state_id' => 1,
                'county' => 'Elmore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'state_id' => 1,
                'county' => 'Bullock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'state_id' => 1,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'state_id' => 1,
                'county' => 'Lowndes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'state_id' => 1,
                'county' => 'Coffee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'state_id' => 1,
                'county' => 'Covington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'state_id' => 1,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'state_id' => 1,
                'county' => 'Cleburne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'state_id' => 1,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'state_id' => 1,
                'county' => 'Houston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'state_id' => 1,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'state_id' => 1,
                'county' => 'Dale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'state_id' => 1,
                'county' => 'Geneva County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'state_id' => 1,
                'county' => 'Conecuh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'state_id' => 1,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'state_id' => 1,
                'county' => 'Escambia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'state_id' => 1,
                'county' => 'Wilcox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'state_id' => 1,
                'county' => 'Clarke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'state_id' => 1,
                'county' => 'Mobile County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'state_id' => 1,
                'county' => 'Baldwin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'state_id' => 1,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'state_id' => 1,
                'county' => 'Dallas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'state_id' => 1,
                'county' => 'Marengo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'state_id' => 1,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'state_id' => 1,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'state_id' => 1,
                'county' => 'Russell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'state_id' => 1,
                'county' => 'Chambers County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'state_id' => 1,
                'county' => 'Choctaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'state_id' => 42,
                'county' => 'Robertson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'state_id' => 42,
                'county' => 'Davidson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'state_id' => 42,
                'county' => 'De Kalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'state_id' => 42,
                'county' => 'Williamson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'state_id' => 42,
                'county' => 'Cheatham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'state_id' => 42,
                'county' => 'Cannon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'state_id' => 42,
                'county' => 'Coffee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'state_id' => 42,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'state_id' => 42,
                'county' => 'Bedford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'state_id' => 42,
                'county' => 'Sumner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'state_id' => 42,
                'county' => 'Stewart County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'state_id' => 42,
                'county' => 'Hickman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'state_id' => 42,
                'county' => 'Dickson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'state_id' => 42,
                'county' => 'Smith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'state_id' => 42,
                'county' => 'Rutherford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'state_id' => 42,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'state_id' => 42,
                'county' => 'Trousdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'state_id' => 42,
                'county' => 'Houston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'state_id' => 42,
                'county' => 'Wilson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'state_id' => 42,
                'county' => 'Humphreys County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'state_id' => 42,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'state_id' => 42,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'state_id' => 42,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'state_id' => 42,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'state_id' => 42,
                'county' => 'Maury County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'state_id' => 42,
                'county' => 'Grundy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'state_id' => 42,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'state_id' => 42,
                'county' => 'McMinn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'state_id' => 42,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'state_id' => 42,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'state_id' => 42,
                'county' => 'Bradley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'state_id' => 42,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'state_id' => 42,
                'county' => 'Rhea County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'state_id' => 42,
                'county' => 'Meigs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'state_id' => 42,
                'county' => 'Sequatchie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'state_id' => 42,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'state_id' => 42,
                'county' => 'Moore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'state_id' => 42,
                'county' => 'Bledsoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'state_id' => 42,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'state_id' => 42,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'state_id' => 42,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'state_id' => 42,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'state_id' => 42,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'state_id' => 42,
                'county' => 'Hawkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'state_id' => 42,
                'county' => 'Carter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'state_id' => 42,
                'county' => 'Unicoi County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'state_id' => 42,
                'county' => 'Blount County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'state_id' => 42,
                'county' => 'Anderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'state_id' => 42,
                'county' => 'Claiborne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'state_id' => 42,
                'county' => 'Grainger County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'state_id' => 42,
                'county' => 'Cocke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'state_id' => 42,
                'county' => 'Campbell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'state_id' => 42,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'state_id' => 42,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'state_id' => 42,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'state_id' => 42,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'state_id' => 42,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'state_id' => 42,
                'county' => 'Sevier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'state_id' => 42,
                'county' => 'Loudon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'state_id' => 42,
                'county' => 'Roane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'state_id' => 42,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'state_id' => 42,
                'county' => 'Hamblen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'state_id' => 42,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'state_id' => 42,
                'county' => 'Crockett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'state_id' => 42,
                'county' => 'Tipton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'state_id' => 42,
                'county' => 'Dyer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'state_id' => 42,
                'county' => 'Hardeman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'state_id' => 42,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'state_id' => 42,
                'county' => 'Haywood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'state_id' => 42,
                'county' => 'Lauderdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'state_id' => 42,
                'county' => 'McNairy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'state_id' => 42,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'state_id' => 42,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'state_id' => 42,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'state_id' => 42,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'state_id' => 42,
                'county' => 'Weakley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'state_id' => 42,
                'county' => 'Obion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'state_id' => 42,
                'county' => 'Gibson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'state_id' => 42,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'state_id' => 42,
                'county' => 'Decatur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'state_id' => 42,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'state_id' => 42,
                'county' => 'Henderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'state_id' => 42,
                'county' => 'Chester County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'state_id' => 42,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'state_id' => 42,
                'county' => 'Giles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'state_id' => 42,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'state_id' => 42,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'state_id' => 42,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'state_id' => 42,
                'county' => 'Fentress County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'state_id' => 42,
                'county' => 'Overton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'state_id' => 42,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'state_id' => 42,
                'county' => 'Pickett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'state_id' => 42,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'state_id' => 42,
                'county' => 'White County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'state_id' => 42,
                'county' => 'Van Buren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'state_id' => 24,
                'county' => 'Lafayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'state_id' => 24,
                'county' => 'Tate County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'state_id' => 24,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'state_id' => 24,
                'county' => 'Panola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'state_id' => 24,
                'county' => 'Quitman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'state_id' => 24,
                'county' => 'Tippah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'state_id' => 24,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'state_id' => 24,
                'county' => 'Coahoma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'state_id' => 24,
                'county' => 'Tunica County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'state_id' => 24,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'state_id' => 24,
                'county' => 'Desoto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'state_id' => 24,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'state_id' => 24,
                'county' => 'Bolivar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'state_id' => 24,
                'county' => 'Sharkey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'state_id' => 24,
                'county' => 'Sunflower County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'state_id' => 24,
                'county' => 'Issaquena County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'state_id' => 24,
                'county' => 'Humphreys County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'state_id' => 24,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'state_id' => 24,
                'county' => 'Pontotoc County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'state_id' => 24,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'state_id' => 24,
                'county' => 'Prentiss County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'state_id' => 24,
                'county' => 'Tishomingo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'state_id' => 24,
                'county' => 'Alcorn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'state_id' => 24,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'state_id' => 24,
                'county' => 'Itawamba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'state_id' => 24,
                'county' => 'Chickasaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'state_id' => 24,
                'county' => 'Grenada County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'state_id' => 24,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'state_id' => 24,
                'county' => 'Tallahatchie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'state_id' => 24,
                'county' => 'Yalobusha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'state_id' => 24,
                'county' => 'Holmes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'state_id' => 24,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'state_id' => 24,
                'county' => 'Leflore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'state_id' => 24,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'state_id' => 24,
                'county' => 'Yazoo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'state_id' => 24,
                'county' => 'Hinds County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'state_id' => 24,
                'county' => 'Rankin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'state_id' => 24,
                'county' => 'Simpson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'state_id' => 24,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'state_id' => 24,
                'county' => 'Leake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'state_id' => 24,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'state_id' => 24,
                'county' => 'Copiah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'state_id' => 24,
                'county' => 'Attala County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'state_id' => 24,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'state_id' => 24,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'state_id' => 24,
                'county' => 'Claiborne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'state_id' => 24,
                'county' => 'Smith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'state_id' => 24,
                'county' => 'Covington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'state_id' => 24,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'state_id' => 24,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'state_id' => 24,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'state_id' => 24,
                'county' => 'Lauderdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'state_id' => 24,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'state_id' => 24,
                'county' => 'Kemper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'state_id' => 24,
                'county' => 'Clarke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'state_id' => 24,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'state_id' => 24,
                'county' => 'Winston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'state_id' => 24,
                'county' => 'Noxubee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'state_id' => 24,
                'county' => 'Neshoba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'state_id' => 24,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'state_id' => 24,
                'county' => 'Forrest County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'state_id' => 24,
                'county' => 'Lamar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'state_id' => 24,
                'county' => 'Jefferson Davis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'state_id' => 24,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'state_id' => 24,
                'county' => 'Pearl River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'state_id' => 24,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'state_id' => 24,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'state_id' => 24,
                'county' => 'George County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'state_id' => 24,
                'county' => 'Walthall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'state_id' => 24,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'state_id' => 24,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'state_id' => 24,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'state_id' => 24,
                'county' => 'Stone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'state_id' => 24,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'state_id' => 24,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'state_id' => 24,
                'county' => 'Wilkinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'state_id' => 24,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'state_id' => 24,
                'county' => 'Amite County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'state_id' => 24,
                'county' => 'Lowndes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'state_id' => 24,
                'county' => 'Choctaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'state_id' => 24,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'state_id' => 24,
                'county' => 'Oktibbeha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'state_id' => 10,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'state_id' => 10,
                'county' => 'Decatur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'state_id' => 10,
                'county' => 'Early County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'state_id' => 10,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'state_id' => 10,
                'county' => 'Terrell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'state_id' => 10,
                'county' => 'Grady County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'state_id' => 10,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'state_id' => 10,
                'county' => 'Miller County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'state_id' => 10,
                'county' => 'Seminole County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'state_id' => 10,
                'county' => 'Quitman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'state_id' => 10,
                'county' => 'Baker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'state_id' => 17,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'state_id' => 17,
                'county' => 'Nelson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'state_id' => 17,
                'county' => 'Trimble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'state_id' => 17,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'state_id' => 17,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'state_id' => 17,
                'county' => 'Oldham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'state_id' => 17,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'state_id' => 17,
                'county' => 'Spencer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'state_id' => 17,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'state_id' => 17,
                'county' => 'Bullitt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'state_id' => 17,
                'county' => 'Meade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'state_id' => 17,
                'county' => 'Breckinridge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'state_id' => 17,
                'county' => 'Grayson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'state_id' => 17,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'state_id' => 17,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'state_id' => 17,
                'county' => 'Nicholas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'state_id' => 17,
                'county' => 'Powell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'state_id' => 17,
                'county' => 'Rowan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'state_id' => 17,
                'county' => 'Menifee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'state_id' => 17,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'state_id' => 17,
                'county' => 'Bath County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'state_id' => 17,
                'county' => 'Estill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'state_id' => 17,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'state_id' => 17,
                'county' => 'Jessamine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'state_id' => 17,
                'county' => 'Anderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'state_id' => 17,
                'county' => 'Woodford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'state_id' => 17,
                'county' => 'Bourbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'state_id' => 17,
                'county' => 'Owen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'state_id' => 17,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'state_id' => 17,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'state_id' => 17,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'state_id' => 17,
                'county' => 'Rockcastle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'state_id' => 17,
                'county' => 'Garrard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'state_id' => 17,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'state_id' => 17,
                'county' => 'Boyle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'state_id' => 17,
                'county' => 'Casey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'state_id' => 17,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'state_id' => 17,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'state_id' => 17,
                'county' => 'Whitley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'state_id' => 17,
                'county' => 'Laurel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'state_id' => 17,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'state_id' => 17,
                'county' => 'Harlan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'state_id' => 17,
                'county' => 'Leslie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'state_id' => 17,
                'county' => 'Bell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'state_id' => 17,
                'county' => 'Letcher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'state_id' => 17,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'state_id' => 17,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'state_id' => 17,
                'county' => 'Campbell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'state_id' => 17,
                'county' => 'Bracken County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'state_id' => 17,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'state_id' => 17,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'state_id' => 17,
                'county' => 'Pendleton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'state_id' => 17,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'state_id' => 17,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'state_id' => 17,
                'county' => 'Kenton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'state_id' => 17,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'state_id' => 17,
                'county' => 'Fleming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'state_id' => 17,
                'county' => 'Gallatin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'state_id' => 17,
                'county' => 'Robertson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'state_id' => 17,
                'county' => 'Boyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'state_id' => 17,
                'county' => 'Greenup County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'state_id' => 17,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'state_id' => 17,
                'county' => 'Carter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'state_id' => 17,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'state_id' => 17,
                'county' => 'Elliott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'state_id' => 17,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'state_id' => 17,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'state_id' => 17,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'state_id' => 17,
                'county' => 'Wolfe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'state_id' => 17,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'state_id' => 17,
                'county' => 'Breathitt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'state_id' => 17,
                'county' => 'Owsley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'state_id' => 17,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'state_id' => 17,
                'county' => 'Magoffin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'state_id' => 17,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'state_id' => 17,
                'county' => 'Knott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'state_id' => 17,
                'county' => 'McCracken County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'state_id' => 17,
                'county' => 'Calloway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'state_id' => 17,
                'county' => 'Carlisle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'state_id' => 17,
                'county' => 'Ballard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'state_id' => 17,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'state_id' => 17,
                'county' => 'Graves County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'state_id' => 17,
                'county' => 'Livingston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'state_id' => 17,
                'county' => 'Hickman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'state_id' => 17,
                'county' => 'Crittenden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'state_id' => 17,
                'county' => 'Lyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'state_id' => 17,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'state_id' => 17,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'state_id' => 17,
                'county' => 'Allen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'state_id' => 17,
                'county' => 'Barren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'state_id' => 17,
                'county' => 'Metcalfe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'state_id' => 17,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'state_id' => 17,
                'county' => 'Simpson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'state_id' => 17,
                'county' => 'Edmonson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'state_id' => 17,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'state_id' => 17,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'state_id' => 17,
                'county' => 'Todd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'state_id' => 17,
                'county' => 'Trigg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'state_id' => 17,
                'county' => 'Christian County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'state_id' => 17,
                'county' => 'Daviess County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'state_id' => 17,
                'county' => 'Ohio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'state_id' => 17,
                'county' => 'Muhlenberg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'state_id' => 17,
                'county' => 'McLean County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'state_id' => 17,
                'county' => 'Henderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'state_id' => 17,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'state_id' => 17,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'state_id' => 17,
                'county' => 'Hopkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'state_id' => 17,
                'county' => 'Caldwell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'state_id' => 17,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'state_id' => 17,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'state_id' => 17,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'state_id' => 17,
                'county' => 'Russell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'state_id' => 17,
                'county' => 'McCreary County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'state_id' => 17,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'state_id' => 17,
                'county' => 'Hart County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'state_id' => 17,
                'county' => 'Adair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'state_id' => 17,
                'county' => 'Larue County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'state_id' => 17,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'state_id' => 17,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'state_id' => 17,
                'county' => 'Green County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'state_id' => 35,
                'county' => 'Licking County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'state_id' => 35,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'state_id' => 35,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'state_id' => 35,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'state_id' => 35,
                'county' => 'Coshocton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'state_id' => 35,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'state_id' => 35,
                'county' => 'Champaign County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'state_id' => 35,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'state_id' => 35,
                'county' => 'Fairfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'state_id' => 35,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'state_id' => 35,
                'county' => 'Ross County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'state_id' => 35,
                'county' => 'Pickaway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'state_id' => 35,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'state_id' => 35,
                'county' => 'Hocking County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'state_id' => 35,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'state_id' => 35,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'state_id' => 35,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'state_id' => 35,
                'county' => 'Morrow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'state_id' => 35,
                'county' => 'Wyandot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'state_id' => 35,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'state_id' => 35,
                'county' => 'Wood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'state_id' => 35,
                'county' => 'Sandusky County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'state_id' => 35,
                'county' => 'Ottawa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'state_id' => 35,
                'county' => 'Lucas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'state_id' => 35,
                'county' => 'Erie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'state_id' => 35,
                'county' => 'Williams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'state_id' => 35,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'state_id' => 35,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'state_id' => 35,
                'county' => 'Defiance County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'state_id' => 35,
                'county' => 'Muskingum County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'state_id' => 35,
                'county' => 'Noble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'state_id' => 35,
                'county' => 'Belmont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'state_id' => 35,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'state_id' => 35,
                'county' => 'Guernsey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'state_id' => 35,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'state_id' => 35,
                'county' => 'Holmes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'state_id' => 35,
                'county' => 'Tuscarawas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'state_id' => 35,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'state_id' => 35,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'state_id' => 35,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'state_id' => 35,
                'county' => 'Columbiana County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'state_id' => 35,
                'county' => 'Lorain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'state_id' => 35,
                'county' => 'Ashtabula County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'state_id' => 35,
                'county' => 'Cuyahoga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'state_id' => 35,
                'county' => 'Geauga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'state_id' => 35,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'state_id' => 35,
                'county' => 'Summit County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'state_id' => 35,
                'county' => 'Portage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'state_id' => 35,
                'county' => 'Medina County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'state_id' => 35,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'state_id' => 35,
                'county' => 'Mahoning County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'state_id' => 35,
                'county' => 'Trumbull County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'state_id' => 35,
                'county' => 'Stark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'state_id' => 35,
                'county' => 'Seneca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'state_id' => 35,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'state_id' => 35,
                'county' => 'Ashland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'state_id' => 35,
                'county' => 'Huron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'state_id' => 35,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'state_id' => 35,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'state_id' => 35,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'state_id' => 35,
                'county' => 'Preble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'state_id' => 35,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'state_id' => 35,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'state_id' => 35,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'state_id' => 35,
                'county' => 'Clermont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'state_id' => 35,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'state_id' => 35,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'state_id' => 35,
                'county' => 'Highland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'state_id' => 35,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'state_id' => 35,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'state_id' => 35,
                'county' => 'Darke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'state_id' => 35,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'state_id' => 35,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'state_id' => 35,
                'county' => 'Miami County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'state_id' => 35,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'state_id' => 35,
                'county' => 'Gallia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'state_id' => 35,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'state_id' => 35,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'state_id' => 35,
                'county' => 'Vinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'state_id' => 35,
                'county' => 'Scioto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'state_id' => 35,
                'county' => 'Athens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'state_id' => 35,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'state_id' => 35,
                'county' => 'Meigs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'state_id' => 35,
                'county' => 'Allen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'state_id' => 35,
                'county' => 'Paulding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'state_id' => 35,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'state_id' => 35,
                'county' => 'Auglaize County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'state_id' => 35,
                'county' => 'Van Wert County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'state_id' => 14,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'state_id' => 14,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'state_id' => 14,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'state_id' => 14,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'state_id' => 14,
                'county' => 'Tipton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'state_id' => 14,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'state_id' => 14,
                'county' => 'Hendricks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'state_id' => 14,
                'county' => 'Rush County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'state_id' => 14,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'state_id' => 14,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'state_id' => 14,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'state_id' => 14,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'state_id' => 14,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'state_id' => 14,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'state_id' => 14,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'state_id' => 14,
                'county' => 'Porter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'state_id' => 14,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'state_id' => 14,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'state_id' => 14,
                'county' => 'La Porte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'state_id' => 14,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'state_id' => 14,
                'county' => 'Starke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'state_id' => 14,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'state_id' => 14,
                'county' => 'Kosciusko County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'state_id' => 14,
                'county' => 'Elkhart County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'state_id' => 14,
                'county' => 'St Joseph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'state_id' => 14,
                'county' => 'Lagrange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'state_id' => 14,
                'county' => 'Noble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'state_id' => 14,
                'county' => 'Huntington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'state_id' => 14,
                'county' => 'Steuben County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'state_id' => 14,
                'county' => 'Allen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'state_id' => 14,
                'county' => 'De Kalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'state_id' => 14,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'state_id' => 14,
                'county' => 'Wells County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'state_id' => 14,
                'county' => 'Whitley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'state_id' => 14,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'state_id' => 14,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'state_id' => 14,
                'county' => 'Miami County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'state_id' => 14,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'state_id' => 14,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'state_id' => 14,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'state_id' => 14,
                'county' => 'Wabash County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'state_id' => 14,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'state_id' => 14,
                'county' => 'Dearborn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'state_id' => 14,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'state_id' => 14,
                'county' => 'Ripley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'state_id' => 14,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'state_id' => 14,
                'county' => 'Switzerland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'state_id' => 14,
                'county' => 'Ohio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'state_id' => 14,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'state_id' => 14,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'state_id' => 14,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'state_id' => 14,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'state_id' => 14,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'state_id' => 14,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'state_id' => 14,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'state_id' => 14,
                'county' => 'Bartholomew County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'state_id' => 14,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'state_id' => 14,
                'county' => 'Jennings County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'state_id' => 14,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'state_id' => 14,
                'county' => 'Decatur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'state_id' => 14,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'state_id' => 14,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'state_id' => 14,
                'county' => 'Jay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'state_id' => 14,
                'county' => 'Blackford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'state_id' => 14,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'state_id' => 14,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'state_id' => 14,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'state_id' => 14,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'state_id' => 14,
                'county' => 'Owen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'state_id' => 14,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'state_id' => 14,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'state_id' => 14,
                'county' => 'Daviess County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'state_id' => 14,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'state_id' => 14,
                'county' => 'Dubois County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'state_id' => 14,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'state_id' => 14,
                'county' => 'Spencer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'state_id' => 14,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'state_id' => 14,
                'county' => 'Warrick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'state_id' => 14,
                'county' => 'Posey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'state_id' => 14,
                'county' => 'Vanderburgh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'state_id' => 14,
                'county' => 'Gibson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'state_id' => 14,
                'county' => 'Vigo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'state_id' => 14,
                'county' => 'Parke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'state_id' => 14,
                'county' => 'Vermillion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'state_id' => 14,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'state_id' => 14,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'state_id' => 14,
                'county' => 'Tippecanoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'state_id' => 14,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'state_id' => 14,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'state_id' => 14,
                'county' => 'Fountain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'state_id' => 14,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'state_id' => 14,
                'county' => 'White County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'state_id' => 22,
                'county' => 'St Clair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'state_id' => 22,
                'county' => 'Lapeer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'state_id' => 22,
                'county' => 'Macomb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'state_id' => 22,
                'county' => 'Oakland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'state_id' => 22,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'state_id' => 22,
                'county' => 'Washtenaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'state_id' => 22,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'state_id' => 22,
                'county' => 'Livingston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'state_id' => 22,
                'county' => 'Sanilac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'state_id' => 22,
                'county' => 'Genesee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'state_id' => 22,
                'county' => 'Huron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'state_id' => 22,
                'county' => 'Shiawassee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'state_id' => 22,
                'county' => 'Saginaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'state_id' => 22,
                'county' => 'Tuscola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'state_id' => 22,
                'county' => 'Arenac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'state_id' => 22,
                'county' => 'Bay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'state_id' => 22,
                'county' => 'Gladwin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'state_id' => 22,
                'county' => 'Gratiot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'state_id' => 22,
                'county' => 'Clare County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'state_id' => 22,
                'county' => 'Midland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'state_id' => 22,
                'county' => 'Oscoda County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'state_id' => 22,
                'county' => 'Roscommon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'state_id' => 22,
                'county' => 'Ogemaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'state_id' => 22,
                'county' => 'Alcona County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'state_id' => 22,
                'county' => 'Iosco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'state_id' => 22,
                'county' => 'Isabella County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'state_id' => 22,
                'county' => 'Ingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'state_id' => 22,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'state_id' => 22,
                'county' => 'Ionia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'state_id' => 22,
                'county' => 'Montcalm County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'state_id' => 22,
                'county' => 'Eaton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'state_id' => 22,
                'county' => 'Barry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'state_id' => 22,
                'county' => 'Kalamazoo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'state_id' => 22,
                'county' => 'Allegan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'state_id' => 22,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'state_id' => 22,
                'county' => 'Van Buren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'state_id' => 22,
                'county' => 'Berrien County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'state_id' => 22,
                'county' => 'Branch County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'state_id' => 22,
                'county' => 'St Joseph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'state_id' => 22,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'state_id' => 22,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'state_id' => 22,
                'county' => 'Lenawee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'state_id' => 22,
                'county' => 'Hillsdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'state_id' => 22,
                'county' => 'Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'state_id' => 22,
                'county' => 'Muskegon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'state_id' => 22,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'state_id' => 22,
                'county' => 'Mecosta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'state_id' => 22,
                'county' => 'Newaygo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'state_id' => 22,
                'county' => 'Ottawa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'state_id' => 22,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'state_id' => 22,
                'county' => 'Oceana County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'state_id' => 22,
                'county' => 'Wexford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'state_id' => 22,
                'county' => 'Grand Traverse County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'state_id' => 22,
                'county' => 'Antrim County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'state_id' => 22,
                'county' => 'Manistee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'state_id' => 22,
                'county' => 'Benzie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'state_id' => 22,
                'county' => 'Leelanau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'state_id' => 22,
                'county' => 'Osceola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'state_id' => 22,
                'county' => 'Missaukee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'state_id' => 22,
                'county' => 'Kalkaska County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'state_id' => 22,
                'county' => 'Emmet County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'state_id' => 22,
                'county' => 'Cheboygan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'state_id' => 22,
                'county' => 'Alpena County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'state_id' => 22,
                'county' => 'Montmorency County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'state_id' => 22,
                'county' => 'Chippewa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'state_id' => 22,
                'county' => 'Charlevoix County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'state_id' => 22,
                'county' => 'Mackinac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'state_id' => 22,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'state_id' => 22,
                'county' => 'Otsego County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'state_id' => 22,
                'county' => 'Presque Isle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'state_id' => 22,
                'county' => 'Dickinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'state_id' => 22,
                'county' => 'Keweenaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'state_id' => 22,
                'county' => 'Alger County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'state_id' => 22,
                'county' => 'Delta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'state_id' => 22,
                'county' => 'Marquette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'state_id' => 22,
                'county' => 'Menominee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'state_id' => 22,
                'county' => 'Schoolcraft County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'state_id' => 22,
                'county' => 'Luce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'state_id' => 22,
                'county' => 'Baraga County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'state_id' => 22,
                'county' => 'Iron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'state_id' => 22,
                'county' => 'Houghton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'state_id' => 22,
                'county' => 'Ontonagon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'state_id' => 22,
                'county' => 'Gogebic County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'state_id' => 15,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'state_id' => 15,
                'county' => 'Guthrie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'state_id' => 15,
                'county' => 'Dallas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'state_id' => 15,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'state_id' => 15,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'state_id' => 15,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'state_id' => 15,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'state_id' => 15,
                'county' => 'Story County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'state_id' => 15,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'state_id' => 15,
                'county' => 'Audubon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'state_id' => 15,
                'county' => 'Mahaska County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'state_id' => 15,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'state_id' => 15,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'state_id' => 15,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'state_id' => 15,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'state_id' => 15,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'state_id' => 15,
                'county' => 'Lucas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'state_id' => 15,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'state_id' => 15,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'state_id' => 15,
                'county' => 'Decatur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'state_id' => 15,
                'county' => 'Wright County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'state_id' => 15,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'state_id' => 15,
                'county' => 'Ringgold County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'state_id' => 15,
                'county' => 'Keokuk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'state_id' => 15,
                'county' => 'Poweshiek County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'state_id' => 15,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'state_id' => 15,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'state_id' => 15,
                'county' => 'Tama County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'state_id' => 15,
                'county' => 'Clarke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'state_id' => 15,
                'county' => 'Adair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'state_id' => 15,
                'county' => 'Cerro Gordo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'state_id' => 15,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'state_id' => 15,
                'county' => 'Winnebago County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'state_id' => 15,
                'county' => 'Mitchell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'state_id' => 15,
                'county' => 'Worth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'state_id' => 15,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'state_id' => 15,
                'county' => 'Kossuth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'state_id' => 15,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'state_id' => 15,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'state_id' => 15,
                'county' => 'Buena Vista County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'state_id' => 15,
                'county' => 'Emmet County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'state_id' => 15,
                'county' => 'Palo Alto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'state_id' => 15,
                'county' => 'Humboldt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'state_id' => 15,
                'county' => 'Sac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'state_id' => 15,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'state_id' => 15,
                'county' => 'Pocahontas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'state_id' => 15,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'state_id' => 15,
                'county' => 'Chickasaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'state_id' => 15,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'state_id' => 15,
                'county' => 'Buchanan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'state_id' => 15,
                'county' => 'Grundy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'state_id' => 15,
                'county' => 'Black Hawk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'state_id' => 15,
                'county' => 'Bremer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'state_id' => 15,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'state_id' => 15,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'state_id' => 15,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'state_id' => 15,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'state_id' => 15,
                'county' => 'Plymouth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'state_id' => 15,
                'county' => 'Sioux County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'state_id' => 15,
                'county' => 'Woodbury County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'state_id' => 15,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'state_id' => 15,
                'county' => 'Ida County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'state_id' => 15,
                'county' => 'Obrien County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'state_id' => 15,
                'county' => 'Monona County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'state_id' => 15,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'state_id' => 15,
                'county' => 'Lyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'state_id' => 15,
                'county' => 'Osceola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'state_id' => 15,
                'county' => 'Dickinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'state_id' => 15,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'state_id' => 15,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'state_id' => 15,
                'county' => 'Pottawattamie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'state_id' => 15,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'state_id' => 15,
                'county' => 'Mills County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'state_id' => 15,
                'county' => 'Page County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'state_id' => 15,
                'county' => 'Fremont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'state_id' => 15,
                'county' => 'Dubuque County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'state_id' => 15,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'state_id' => 15,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'state_id' => 15,
                'county' => 'Clayton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'state_id' => 15,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'state_id' => 15,
                'county' => 'Winneshiek County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'state_id' => 15,
                'county' => 'Allamakee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'state_id' => 15,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'state_id' => 15,
                'county' => 'Linn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'state_id' => 15,
                'county' => 'Iowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'state_id' => 15,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'state_id' => 15,
                'county' => 'Cedar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'state_id' => 15,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'state_id' => 15,
                'county' => 'Wapello County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'state_id' => 15,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'state_id' => 15,
                'county' => 'Van Buren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'state_id' => 15,
                'county' => 'Davis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'state_id' => 15,
                'county' => 'Appanoose County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'state_id' => 15,
                'county' => 'Des Moines County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'state_id' => 15,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'state_id' => 15,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'state_id' => 15,
                'county' => 'Louisa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'state_id' => 15,
                'county' => 'Muscatine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'state_id' => 15,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'state_id' => 49,
                'county' => 'Sheboygan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'state_id' => 49,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'state_id' => 49,
                'county' => 'Dodge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'state_id' => 49,
                'county' => 'Ozaukee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'state_id' => 49,
                'county' => 'Waukesha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'state_id' => 49,
                'county' => 'Fond Du Lac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'state_id' => 49,
                'county' => 'Calumet County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'state_id' => 49,
                'county' => 'Manitowoc County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'state_id' => 49,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'state_id' => 49,
                'county' => 'Kenosha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'state_id' => 49,
                'county' => 'Racine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'state_id' => 49,
                'county' => 'Milwaukee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'state_id' => 49,
                'county' => 'Walworth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'state_id' => 49,
                'county' => 'Rock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'state_id' => 49,
                'county' => 'Green County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'state_id' => 49,
                'county' => 'Iowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'state_id' => 49,
                'county' => 'Lafayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'state_id' => 49,
                'county' => 'Dane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'state_id' => 49,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'state_id' => 49,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'state_id' => 49,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'state_id' => 49,
                'county' => 'Sauk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'state_id' => 49,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'state_id' => 49,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'state_id' => 49,
                'county' => 'Marquette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'state_id' => 49,
                'county' => 'Green Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'state_id' => 49,
                'county' => 'Juneau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'state_id' => 49,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'state_id' => 49,
                'county' => 'St Croix County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'state_id' => 49,
                'county' => 'Pierce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'state_id' => 49,
                'county' => 'Barron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'state_id' => 49,
                'county' => 'Oconto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'state_id' => 49,
                'county' => 'Marinette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'state_id' => 49,
                'county' => 'Forest County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'state_id' => 49,
                'county' => 'Outagamie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'state_id' => 49,
                'county' => 'Shawano County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'state_id' => 49,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'state_id' => 49,
                'county' => 'Florence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'state_id' => 49,
                'county' => 'Menominee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'state_id' => 49,
                'county' => 'Kewaunee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'state_id' => 49,
                'county' => 'Door County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'state_id' => 49,
                'county' => 'Marathon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'state_id' => 49,
                'county' => 'Wood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'state_id' => 49,
                'county' => 'Portage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'state_id' => 49,
                'county' => 'Langlade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'state_id' => 49,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'state_id' => 49,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'state_id' => 49,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'state_id' => 49,
                'county' => 'Price County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'state_id' => 49,
                'county' => 'Oneida County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'state_id' => 49,
                'county' => 'Vilas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'state_id' => 49,
                'county' => 'Ashland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'state_id' => 49,
                'county' => 'Iron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'state_id' => 49,
                'county' => 'Rusk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'state_id' => 49,
                'county' => 'La Crosse County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'state_id' => 49,
                'county' => 'Buffalo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'state_id' => 49,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'state_id' => 49,
                'county' => 'Trempealeau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'state_id' => 49,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'state_id' => 49,
                'county' => 'Vernon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'state_id' => 49,
                'county' => 'Eau Claire County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'state_id' => 49,
                'county' => 'Pepin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'state_id' => 49,
                'county' => 'Chippewa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'state_id' => 49,
                'county' => 'Dunn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'state_id' => 49,
                'county' => 'Washburn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'state_id' => 49,
                'county' => 'Bayfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'state_id' => 49,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'state_id' => 49,
                'county' => 'Sawyer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'state_id' => 49,
                'county' => 'Burnett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'state_id' => 49,
                'county' => 'Winnebago County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'state_id' => 49,
                'county' => 'Waushara County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'state_id' => 49,
                'county' => 'Waupaca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'state_id' => 23,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'state_id' => 23,
                'county' => 'Chisago County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'state_id' => 23,
                'county' => 'Anoka County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'state_id' => 23,
                'county' => 'Isanti County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'state_id' => 23,
                'county' => 'Pine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'state_id' => 23,
                'county' => 'Goodhue County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'state_id' => 23,
                'county' => 'Dakota County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'state_id' => 23,
                'county' => 'Rice County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'state_id' => 23,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'state_id' => 23,
                'county' => 'Wabasha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'state_id' => 23,
                'county' => 'Steele County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'state_id' => 23,
                'county' => 'Kanabec County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'state_id' => 23,
                'county' => 'Ramsey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'state_id' => 23,
                'county' => 'Hennepin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'state_id' => 23,
                'county' => 'Wright County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'state_id' => 23,
                'county' => 'Sibley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'state_id' => 23,
                'county' => 'Sherburne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'state_id' => 23,
                'county' => 'Renville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'state_id' => 23,
                'county' => 'McLeod County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'state_id' => 23,
                'county' => 'Carver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'state_id' => 23,
                'county' => 'Stearns County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'state_id' => 23,
                'county' => 'Meeker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'state_id' => 23,
                'county' => 'Mille Lacs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'state_id' => 23,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'state_id' => 23,
                'county' => 'St Louis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'state_id' => 23,
                'county' => 'Cook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'state_id' => 23,
                'county' => 'Carlton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'state_id' => 23,
                'county' => 'Itasca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'state_id' => 23,
                'county' => 'Aitkin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'state_id' => 23,
                'county' => 'Koochiching County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'state_id' => 23,
                'county' => 'Olmsted County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'state_id' => 23,
                'county' => 'Mower County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'state_id' => 23,
                'county' => 'Winona County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'state_id' => 23,
                'county' => 'Houston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'state_id' => 23,
                'county' => 'Fillmore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'state_id' => 23,
                'county' => 'Dodge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'state_id' => 23,
                'county' => 'Blue Earth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'state_id' => 23,
                'county' => 'Nicollet County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'state_id' => 23,
                'county' => 'Freeborn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'state_id' => 23,
                'county' => 'Faribault County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'state_id' => 23,
                'county' => 'Le Sueur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'state_id' => 23,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'state_id' => 23,
                'county' => 'Watonwan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'state_id' => 23,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'state_id' => 23,
                'county' => 'Waseca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'state_id' => 23,
                'county' => 'Redwood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'state_id' => 23,
                'county' => 'Cottonwood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'state_id' => 23,
                'county' => 'Nobles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'state_id' => 23,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'state_id' => 23,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'state_id' => 23,
                'county' => 'Murray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'state_id' => 23,
                'county' => 'Lyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'state_id' => 23,
                'county' => 'Rock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'state_id' => 23,
                'county' => 'Pipestone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'state_id' => 23,
                'county' => 'Kandiyohi County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'state_id' => 23,
                'county' => 'Stevens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'state_id' => 23,
                'county' => 'Swift County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'state_id' => 23,
                'county' => 'Big Stone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'state_id' => 23,
                'county' => 'Lac Qui Parle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'state_id' => 23,
                'county' => 'Traverse County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'state_id' => 23,
                'county' => 'Yellow Medicine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'state_id' => 23,
                'county' => 'Chippewa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'state_id' => 23,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'state_id' => 23,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'state_id' => 23,
                'county' => 'Morrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'state_id' => 23,
                'county' => 'Todd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'state_id' => 23,
                'county' => 'Pope County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'state_id' => 23,
                'county' => 'Otter Tail County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'state_id' => 23,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'state_id' => 23,
                'county' => 'Crow Wing County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'state_id' => 23,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'state_id' => 23,
                'county' => 'Hubbard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'state_id' => 23,
                'county' => 'Wadena County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'state_id' => 23,
                'county' => 'Becker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'state_id' => 23,
                'county' => 'Norman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'state_id' => 23,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'state_id' => 23,
                'county' => 'Mahnomen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'state_id' => 23,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'state_id' => 23,
                'county' => 'Wilkin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'state_id' => 23,
                'county' => 'Beltrami County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'state_id' => 23,
                'county' => 'Clearwater County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'state_id' => 23,
                'county' => 'Lake of the Woods County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'state_id' => 23,
                'county' => 'Roseau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'state_id' => 23,
                'county' => 'Pennington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'state_id' => 23,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'state_id' => 23,
                'county' => 'Red Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'state_id' => 23,
                'county' => 'Kittson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'state_id' => 41,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'state_id' => 41,
                'county' => 'Brookings County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'state_id' => 41,
                'county' => 'Minnehaha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'state_id' => 41,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'state_id' => 41,
                'county' => 'McCook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'state_id' => 41,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'state_id' => 41,
                'county' => 'Turner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'state_id' => 41,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'state_id' => 41,
                'county' => 'Moody County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'state_id' => 41,
                'county' => 'Hutchinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'state_id' => 41,
                'county' => 'Yankton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'state_id' => 41,
                'county' => 'Kingsbury County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'state_id' => 41,
                'county' => 'Bon Homme County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'state_id' => 41,
                'county' => 'Codington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'state_id' => 41,
                'county' => 'Deuel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'state_id' => 41,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'state_id' => 41,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'state_id' => 41,
                'county' => 'Day County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'state_id' => 41,
                'county' => 'Hamlin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'state_id' => 41,
                'county' => 'Roberts County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'state_id' => 41,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'state_id' => 41,
                'county' => 'Davison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'state_id' => 41,
                'county' => 'Hanson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'state_id' => 41,
                'county' => 'Jerauld County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'state_id' => 41,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'state_id' => 41,
                'county' => 'Sanborn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'state_id' => 41,
                'county' => 'Gregory County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'state_id' => 41,
                'county' => 'Miner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'state_id' => 41,
                'county' => 'Beadle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'state_id' => 41,
                'county' => 'Brule County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'state_id' => 41,
                'county' => 'Charles Mix County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'state_id' => 41,
                'county' => 'Buffalo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'state_id' => 41,
                'county' => 'Hyde County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'state_id' => 41,
                'county' => 'Hand County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'state_id' => 41,
                'county' => 'Lyman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'state_id' => 41,
                'county' => 'Aurora County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'state_id' => 41,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'state_id' => 41,
                'county' => 'Walworth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'state_id' => 41,
                'county' => 'Spink County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'state_id' => 41,
                'county' => 'Edmunds County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'state_id' => 41,
                'county' => 'Faulk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'state_id' => 41,
                'county' => 'McPherson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'state_id' => 41,
                'county' => 'Potter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'state_id' => 41,
                'county' => 'Hughes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'state_id' => 41,
                'county' => 'Sully County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'state_id' => 41,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'state_id' => 41,
                'county' => 'Tripp County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'state_id' => 41,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'state_id' => 41,
                'county' => 'Stanley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'state_id' => 41,
                'county' => 'Bennett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'state_id' => 41,
                'county' => 'Haakon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'state_id' => 41,
                'county' => 'Todd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'state_id' => 41,
                'county' => 'Mellette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'state_id' => 41,
                'county' => 'Perkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'state_id' => 41,
                'county' => 'Corson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'state_id' => 41,
                'county' => 'Ziebach County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'state_id' => 41,
                'county' => 'Dewey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'state_id' => 41,
                'county' => 'Meade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'state_id' => 41,
                'county' => 'Campbell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'state_id' => 41,
                'county' => 'Harding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'state_id' => 41,
                'county' => 'Pennington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'state_id' => 41,
                'county' => 'Shannon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'state_id' => 41,
                'county' => 'Butte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'state_id' => 41,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'state_id' => 41,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'state_id' => 41,
                'county' => 'Fall River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'state_id' => 34,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'state_id' => 34,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'state_id' => 34,
                'county' => 'Traill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'state_id' => 34,
                'county' => 'Sargent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'state_id' => 34,
                'county' => 'Ransom County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'state_id' => 34,
                'county' => 'Barnes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'state_id' => 34,
                'county' => 'Steele County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'state_id' => 34,
                'county' => 'Grand Forks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'state_id' => 34,
                'county' => 'Walsh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'state_id' => 34,
                'county' => 'Nelson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'state_id' => 34,
                'county' => 'Pembina County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'state_id' => 34,
                'county' => 'Cavalier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'state_id' => 34,
                'county' => 'Ramsey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'state_id' => 34,
                'county' => 'Rolette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'state_id' => 34,
                'county' => 'Pierce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'state_id' => 34,
                'county' => 'Towner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'state_id' => 34,
                'county' => 'Bottineau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'state_id' => 34,
                'county' => 'Wells County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'state_id' => 34,
                'county' => 'Benson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'state_id' => 34,
                'county' => 'Eddy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'state_id' => 34,
                'county' => 'Stutsman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'state_id' => 34,
                'county' => 'McIntosh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'state_id' => 34,
                'county' => 'Lamoure County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'state_id' => 34,
                'county' => 'Griggs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'state_id' => 34,
                'county' => 'Foster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'state_id' => 34,
                'county' => 'Kidder County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'state_id' => 34,
                'county' => 'Sheridan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'state_id' => 34,
                'county' => 'Dickey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'state_id' => 34,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'state_id' => 34,
                'county' => 'Burleigh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'state_id' => 34,
                'county' => 'Morton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'state_id' => 34,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'state_id' => 34,
                'county' => 'Emmons County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'state_id' => 34,
                'county' => 'Sioux County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'state_id' => 34,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'state_id' => 34,
                'county' => 'Oliver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'state_id' => 34,
                'county' => 'McLean County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'state_id' => 34,
                'county' => 'Stark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'state_id' => 34,
                'county' => 'Slope County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'state_id' => 34,
                'county' => 'Golden Valley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'state_id' => 34,
                'county' => 'Bowman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'state_id' => 34,
                'county' => 'Dunn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'state_id' => 34,
                'county' => 'Billings County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'state_id' => 34,
                'county' => 'McKenzie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'state_id' => 34,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'state_id' => 34,
                'county' => 'Hettinger County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'state_id' => 34,
                'county' => 'Ward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'state_id' => 34,
                'county' => 'McHenry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'state_id' => 34,
                'county' => 'Burke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'state_id' => 34,
                'county' => 'Divide County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'state_id' => 34,
                'county' => 'Renville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'state_id' => 34,
                'county' => 'Williams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'state_id' => 34,
                'county' => 'Mountrail County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'state_id' => 26,
                'county' => 'Stillwater County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'state_id' => 26,
                'county' => 'Yellowstone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'state_id' => 26,
                'county' => 'Rosebud County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'state_id' => 26,
                'county' => 'Carbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'state_id' => 26,
                'county' => 'Treasure County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'state_id' => 26,
                'county' => 'Sweet Grass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'state_id' => 26,
                'county' => 'Big Horn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'state_id' => 26,
                'county' => 'Park County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'state_id' => 26,
                'county' => 'Fergus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'state_id' => 26,
                'county' => 'Wheatland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'state_id' => 26,
                'county' => 'Golden Valley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'state_id' => 26,
                'county' => 'Meagher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'state_id' => 26,
                'county' => 'Musselshell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'state_id' => 26,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'state_id' => 26,
                'county' => 'Powder River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'state_id' => 26,
                'county' => 'Petroleum County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'state_id' => 26,
                'county' => 'Roosevelt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1836,
                'state_id' => 26,
                'county' => 'Sheridan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1837,
                'state_id' => 26,
                'county' => 'McCone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1838,
                'state_id' => 26,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1839,
                'state_id' => 26,
                'county' => 'Daniels County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1840,
                'state_id' => 26,
                'county' => 'Valley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'state_id' => 26,
                'county' => 'Dawson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1842,
                'state_id' => 26,
                'county' => 'Phillips County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1843,
                'state_id' => 26,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1844,
                'state_id' => 26,
                'county' => 'Carter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1845,
                'state_id' => 26,
                'county' => 'Fallon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1846,
                'state_id' => 26,
                'county' => 'Prairie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1847,
                'state_id' => 26,
                'county' => 'Wibaux County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1848,
                'state_id' => 26,
                'county' => 'Cascade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1849,
                'state_id' => 26,
                'county' => 'Lewis and Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1850,
                'state_id' => 26,
                'county' => 'Glacier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1851,
                'state_id' => 26,
                'county' => 'Pondera County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1852,
                'state_id' => 26,
                'county' => 'Teton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1853,
                'state_id' => 26,
                'county' => 'Chouteau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1854,
                'state_id' => 26,
                'county' => 'Toole County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1855,
                'state_id' => 26,
                'county' => 'Judith Basin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1856,
                'state_id' => 26,
                'county' => 'Liberty County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1857,
                'state_id' => 26,
                'county' => 'Hill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1858,
                'state_id' => 26,
                'county' => 'Blaine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1859,
                'state_id' => 26,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1860,
                'state_id' => 26,
                'county' => 'Broadwater County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1861,
                'state_id' => 26,
                'county' => 'Silver Bow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1862,
                'state_id' => 26,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1863,
                'state_id' => 26,
                'county' => 'Deer Lodge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1864,
                'state_id' => 26,
                'county' => 'Powell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1865,
                'state_id' => 26,
                'county' => 'Gallatin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1866,
                'state_id' => 26,
                'county' => 'Beaverhead County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1867,
                'state_id' => 26,
                'county' => 'Missoula County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1868,
                'state_id' => 26,
                'county' => 'Mineral County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1869,
                'state_id' => 26,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1870,
                'state_id' => 26,
                'county' => 'Ravalli County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1871,
                'state_id' => 26,
                'county' => 'Sanders County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1872,
                'state_id' => 26,
                'county' => 'Granite County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1873,
                'state_id' => 26,
                'county' => 'Flathead County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1874,
                'state_id' => 26,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1875,
                'state_id' => 13,
                'county' => 'McHenry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1876,
                'state_id' => 13,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1877,
                'state_id' => 13,
                'county' => 'Cook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1878,
                'state_id' => 13,
                'county' => 'Dupage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1879,
                'state_id' => 13,
                'county' => 'Kane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1880,
                'state_id' => 13,
                'county' => 'Dekalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1881,
                'state_id' => 13,
                'county' => 'Ogle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1882,
                'state_id' => 13,
                'county' => 'Will County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1883,
                'state_id' => 13,
                'county' => 'Grundy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'state_id' => 13,
                'county' => 'Livingston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1885,
                'state_id' => 13,
                'county' => 'La Salle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1886,
                'state_id' => 13,
                'county' => 'Kendall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'state_id' => 13,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1888,
                'state_id' => 13,
                'county' => 'Kankakee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1889,
                'state_id' => 13,
                'county' => 'Iroquois County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1890,
                'state_id' => 13,
                'county' => 'Ford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1891,
                'state_id' => 13,
                'county' => 'Vermilion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1892,
                'state_id' => 13,
                'county' => 'Champaign County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1893,
                'state_id' => 13,
                'county' => 'Jo Daviess County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1894,
                'state_id' => 13,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'state_id' => 13,
                'county' => 'Stephenson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1896,
                'state_id' => 13,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1897,
                'state_id' => 13,
                'county' => 'Winnebago County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1898,
                'state_id' => 13,
                'county' => 'Whiteside County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1899,
                'state_id' => 13,
                'county' => 'Rock Island County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1900,
                'state_id' => 13,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1901,
                'state_id' => 13,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1902,
                'state_id' => 13,
                'county' => 'Bureau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1903,
                'state_id' => 13,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1904,
                'state_id' => 13,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1905,
                'state_id' => 13,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1906,
                'state_id' => 13,
                'county' => 'McDonough County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1907,
                'state_id' => 13,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1908,
                'state_id' => 13,
                'county' => 'Henderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1909,
                'state_id' => 13,
                'county' => 'Stark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1910,
                'state_id' => 13,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1911,
                'state_id' => 13,
                'county' => 'Hancock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1912,
                'state_id' => 13,
                'county' => 'Peoria County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1913,
                'state_id' => 13,
                'county' => 'Schuyler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1914,
                'state_id' => 13,
                'county' => 'Woodford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1915,
                'state_id' => 13,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1916,
                'state_id' => 13,
                'county' => 'Tazewell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1917,
                'state_id' => 13,
                'county' => 'McLean County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1918,
                'state_id' => 13,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1919,
                'state_id' => 13,
                'county' => 'De Witt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'state_id' => 13,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1921,
                'state_id' => 13,
                'county' => 'Piatt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1922,
                'state_id' => 13,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1923,
                'state_id' => 13,
                'county' => 'Coles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1924,
                'state_id' => 13,
                'county' => 'Moultrie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1925,
                'state_id' => 13,
                'county' => 'Edgar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1926,
                'state_id' => 13,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1927,
                'state_id' => 13,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1928,
                'state_id' => 13,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1929,
                'state_id' => 13,
                'county' => 'Macoupin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1930,
                'state_id' => 13,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1931,
                'state_id' => 13,
                'county' => 'Jersey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1932,
                'state_id' => 13,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1933,
                'state_id' => 13,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1934,
                'state_id' => 13,
                'county' => 'Bond County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1935,
                'state_id' => 13,
                'county' => 'St Clair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'state_id' => 13,
                'county' => 'Christian County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1937,
                'state_id' => 13,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1938,
                'state_id' => 13,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1939,
                'state_id' => 13,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1940,
                'state_id' => 13,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1941,
                'state_id' => 13,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1942,
                'state_id' => 13,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1943,
                'state_id' => 13,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1944,
                'state_id' => 13,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1945,
                'state_id' => 13,
                'county' => 'Effingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1946,
                'state_id' => 13,
                'county' => 'Wabash County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1947,
                'state_id' => 13,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1948,
                'state_id' => 13,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1949,
                'state_id' => 13,
                'county' => 'Richland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1950,
                'state_id' => 13,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1951,
                'state_id' => 13,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1952,
                'state_id' => 13,
                'county' => 'Cumberland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1953,
                'state_id' => 13,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1954,
                'state_id' => 13,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1955,
                'state_id' => 13,
                'county' => 'Edwards County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1956,
                'state_id' => 13,
                'county' => 'Sangamon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1957,
                'state_id' => 13,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1958,
                'state_id' => 13,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1959,
                'state_id' => 13,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1960,
                'state_id' => 13,
                'county' => 'Menard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1961,
                'state_id' => 13,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'state_id' => 13,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1963,
                'state_id' => 13,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'state_id' => 13,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1965,
                'state_id' => 13,
                'county' => 'White County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1966,
                'state_id' => 13,
                'county' => 'Gallatin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1967,
                'state_id' => 13,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1968,
                'state_id' => 13,
                'county' => 'Williamson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1969,
                'state_id' => 13,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1970,
                'state_id' => 13,
                'county' => 'Massac County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1971,
                'state_id' => 13,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1972,
                'state_id' => 13,
                'county' => 'Alexander County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1973,
                'state_id' => 13,
                'county' => 'Saline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1974,
                'state_id' => 13,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1975,
                'state_id' => 13,
                'county' => 'Pope County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1976,
                'state_id' => 13,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1977,
                'state_id' => 25,
                'county' => 'St Louis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1978,
                'state_id' => 25,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'state_id' => 25,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1980,
                'state_id' => 25,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1981,
                'state_id' => 25,
                'county' => 'St Francois County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1982,
                'state_id' => 25,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'state_id' => 25,
                'county' => 'Gasconade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1984,
                'state_id' => 25,
                'county' => 'St Louis City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1985,
                'state_id' => 25,
                'county' => 'St Charles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1986,
                'state_id' => 25,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1987,
                'state_id' => 25,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1988,
                'state_id' => 25,
                'county' => 'Warren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1989,
                'state_id' => 25,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1990,
                'state_id' => 25,
                'county' => 'Audrain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1991,
                'state_id' => 25,
                'county' => 'Callaway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1992,
                'state_id' => 25,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1993,
                'state_id' => 25,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1994,
                'state_id' => 25,
                'county' => 'Macon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1995,
                'state_id' => 25,
                'county' => 'Scotland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1996,
                'state_id' => 25,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1997,
                'state_id' => 25,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1998,
                'state_id' => 25,
                'county' => 'Ralls County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1999,
                'state_id' => 25,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'state_id' => 25,
                'county' => 'Adair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'state_id' => 25,
                'county' => 'Schuyler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2002,
                'state_id' => 25,
                'county' => 'Sullivan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2003,
                'state_id' => 25,
                'county' => 'Putnam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2004,
                'state_id' => 25,
                'county' => 'Linn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2005,
                'state_id' => 25,
                'county' => 'Iron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2006,
                'state_id' => 25,
                'county' => 'Reynolds County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2007,
                'state_id' => 25,
                'county' => 'Ste Genevieve County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2008,
                'state_id' => 25,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'state_id' => 25,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2010,
                'state_id' => 25,
                'county' => 'Bollinger County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2011,
                'state_id' => 25,
                'county' => 'Cape Girardeau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2012,
                'state_id' => 25,
                'county' => 'Stoddard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2013,
                'state_id' => 25,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'state_id' => 25,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2015,
                'state_id' => 25,
                'county' => 'Mississippi County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2016,
                'state_id' => 25,
                'county' => 'Dunklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2017,
                'state_id' => 25,
                'county' => 'Pemiscot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2018,
                'state_id' => 25,
                'county' => 'New Madrid County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2019,
                'state_id' => 25,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'state_id' => 25,
                'county' => 'Ripley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2021,
                'state_id' => 25,
                'county' => 'Carter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2022,
                'state_id' => 25,
                'county' => 'Lafayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2023,
                'state_id' => 25,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2024,
                'state_id' => 25,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2025,
                'state_id' => 25,
                'county' => 'Ray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2026,
                'state_id' => 25,
                'county' => 'Platte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2027,
                'state_id' => 25,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2028,
                'state_id' => 25,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2029,
                'state_id' => 25,
                'county' => 'Buchanan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2030,
                'state_id' => 25,
                'county' => 'Gentry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2031,
                'state_id' => 25,
                'county' => 'Worth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2032,
                'state_id' => 25,
                'county' => 'Andrew County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2033,
                'state_id' => 25,
                'county' => 'Dekalb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2034,
                'state_id' => 25,
                'county' => 'Nodaway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2035,
                'state_id' => 25,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2036,
                'state_id' => 25,
                'county' => 'Clinton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2037,
                'state_id' => 25,
                'county' => 'Holt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2038,
                'state_id' => 25,
                'county' => 'Atchison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2039,
                'state_id' => 25,
                'county' => 'Livingston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'state_id' => 25,
                'county' => 'Daviess County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2041,
                'state_id' => 25,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2042,
                'state_id' => 25,
                'county' => 'Caldwell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2043,
                'state_id' => 25,
                'county' => 'Mercer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2044,
                'state_id' => 25,
                'county' => 'Grundy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2045,
                'state_id' => 25,
                'county' => 'Chariton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2046,
                'state_id' => 25,
                'county' => 'Bates County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2047,
                'state_id' => 25,
                'county' => 'St Clair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2048,
                'state_id' => 25,
                'county' => 'Henry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2049,
                'state_id' => 25,
                'county' => 'Vernon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2050,
                'state_id' => 25,
                'county' => 'Cedar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2051,
                'state_id' => 25,
                'county' => 'Barton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2052,
                'state_id' => 25,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'state_id' => 25,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2054,
                'state_id' => 25,
                'county' => 'McDonald County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2055,
                'state_id' => 25,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2056,
                'state_id' => 25,
                'county' => 'Barry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2057,
                'state_id' => 25,
                'county' => 'Osage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2058,
                'state_id' => 25,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2059,
                'state_id' => 25,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060,
                'state_id' => 25,
                'county' => 'Maries County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2061,
                'state_id' => 25,
                'county' => 'Miller County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2062,
                'state_id' => 25,
                'county' => 'Moniteau County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2063,
                'state_id' => 25,
                'county' => 'Camden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2064,
                'state_id' => 25,
                'county' => 'Cole County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2065,
                'state_id' => 25,
                'county' => 'Cooper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2066,
                'state_id' => 25,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2067,
                'state_id' => 25,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2068,
                'state_id' => 25,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2069,
                'state_id' => 25,
                'county' => 'Pettis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2070,
                'state_id' => 25,
                'county' => 'Saline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2071,
                'state_id' => 25,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2072,
                'state_id' => 25,
                'county' => 'Phelps County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2073,
                'state_id' => 25,
                'county' => 'Shannon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2074,
                'state_id' => 25,
                'county' => 'Dent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2075,
                'state_id' => 25,
                'county' => 'Texas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2076,
                'state_id' => 25,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2077,
                'state_id' => 25,
                'county' => 'Laclede County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2078,
                'state_id' => 25,
                'county' => 'Howell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2079,
                'state_id' => 25,
                'county' => 'Dallas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2080,
                'state_id' => 25,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2081,
                'state_id' => 25,
                'county' => 'Dade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2082,
                'state_id' => 25,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2083,
                'state_id' => 25,
                'county' => 'Oregon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2084,
                'state_id' => 25,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2085,
                'state_id' => 25,
                'county' => 'Ozark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2086,
                'state_id' => 25,
                'county' => 'Christian County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2087,
                'state_id' => 25,
                'county' => 'Stone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2088,
                'state_id' => 25,
                'county' => 'Taney County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2089,
                'state_id' => 25,
                'county' => 'Hickory County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2090,
                'state_id' => 25,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2091,
                'state_id' => 25,
                'county' => 'Wright County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2092,
                'state_id' => 16,
                'county' => 'Atchison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2093,
                'state_id' => 16,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2094,
                'state_id' => 16,
                'county' => 'Leavenworth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2095,
                'state_id' => 16,
                'county' => 'Doniphan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2096,
                'state_id' => 16,
                'county' => 'Linn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2097,
                'state_id' => 16,
                'county' => 'Wyandotte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2098,
                'state_id' => 16,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2099,
                'state_id' => 16,
                'county' => 'Anderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2100,
                'state_id' => 16,
                'county' => 'Miami County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2101,
                'state_id' => 16,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2102,
                'state_id' => 16,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2103,
                'state_id' => 16,
                'county' => 'Wabaunsee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2104,
                'state_id' => 16,
                'county' => 'Shawnee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2105,
                'state_id' => 16,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2106,
                'state_id' => 16,
                'county' => 'Nemaha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2107,
                'state_id' => 16,
                'county' => 'Pottawatomie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2108,
                'state_id' => 16,
                'county' => 'Osage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2109,
                'state_id' => 16,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2110,
                'state_id' => 16,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2111,
                'state_id' => 16,
                'county' => 'Geary County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2112,
                'state_id' => 16,
                'county' => 'Riley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2113,
                'state_id' => 16,
                'county' => 'Bourbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2114,
                'state_id' => 16,
                'county' => 'Wilson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2115,
                'state_id' => 16,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2116,
                'state_id' => 16,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2117,
                'state_id' => 16,
                'county' => 'Neosho County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2118,
                'state_id' => 16,
                'county' => 'Allen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2119,
                'state_id' => 16,
                'county' => 'Woodson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2120,
                'state_id' => 16,
                'county' => 'Elk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2121,
                'state_id' => 16,
                'county' => 'Lyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2122,
                'state_id' => 16,
                'county' => 'Morris County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2123,
                'state_id' => 16,
                'county' => 'Coffey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2124,
                'state_id' => 16,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2125,
                'state_id' => 16,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2126,
                'state_id' => 16,
                'county' => 'Chase County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2127,
                'state_id' => 16,
                'county' => 'Greenwood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2128,
                'state_id' => 16,
                'county' => 'Cloud County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2129,
                'state_id' => 16,
                'county' => 'Republic County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2130,
                'state_id' => 16,
                'county' => 'Smith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2131,
                'state_id' => 16,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2132,
                'state_id' => 16,
                'county' => 'Jewell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2133,
                'state_id' => 16,
                'county' => 'Sedgwick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2134,
                'state_id' => 16,
                'county' => 'Harper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2135,
                'state_id' => 16,
                'county' => 'Sumner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2136,
                'state_id' => 16,
                'county' => 'Cowley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2137,
                'state_id' => 16,
                'county' => 'Harvey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2138,
                'state_id' => 16,
                'county' => 'Pratt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2139,
                'state_id' => 16,
                'county' => 'Chautauqua County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2140,
                'state_id' => 16,
                'county' => 'Comanche County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2141,
                'state_id' => 16,
                'county' => 'Kingman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2142,
                'state_id' => 16,
                'county' => 'Kiowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2143,
                'state_id' => 16,
                'county' => 'Barber County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2144,
                'state_id' => 16,
                'county' => 'McPherson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2145,
                'state_id' => 16,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2146,
                'state_id' => 16,
                'county' => 'Labette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2147,
                'state_id' => 16,
                'county' => 'Saline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2148,
                'state_id' => 16,
                'county' => 'Dickinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2149,
                'state_id' => 16,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2150,
                'state_id' => 16,
                'county' => 'Mitchell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2151,
                'state_id' => 16,
                'county' => 'Ottawa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2152,
                'state_id' => 16,
                'county' => 'Rice County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2153,
                'state_id' => 16,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2154,
                'state_id' => 16,
                'county' => 'Osborne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2155,
                'state_id' => 16,
                'county' => 'Ellsworth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2156,
                'state_id' => 16,
                'county' => 'Reno County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2157,
                'state_id' => 16,
                'county' => 'Barton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2158,
                'state_id' => 16,
                'county' => 'Rush County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2159,
                'state_id' => 16,
                'county' => 'Ness County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2160,
                'state_id' => 16,
                'county' => 'Edwards County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2161,
                'state_id' => 16,
                'county' => 'Pawnee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2162,
                'state_id' => 16,
                'county' => 'Stafford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2163,
                'state_id' => 16,
                'county' => 'Ellis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2164,
                'state_id' => 16,
                'county' => 'Phillips County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2165,
                'state_id' => 16,
                'county' => 'Norton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2166,
                'state_id' => 16,
                'county' => 'Graham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2167,
                'state_id' => 16,
                'county' => 'Russell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2168,
                'state_id' => 16,
                'county' => 'Trego County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2169,
                'state_id' => 16,
                'county' => 'Rooks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2170,
                'state_id' => 16,
                'county' => 'Decatur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2171,
                'state_id' => 16,
                'county' => 'Thomas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2172,
                'state_id' => 16,
                'county' => 'Rawlins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2173,
                'state_id' => 16,
                'county' => 'Cheyenne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2174,
                'state_id' => 16,
                'county' => 'Sherman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2175,
                'state_id' => 16,
                'county' => 'Gove County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2176,
                'state_id' => 16,
                'county' => 'Sheridan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2177,
                'state_id' => 16,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2178,
                'state_id' => 16,
                'county' => 'Wallace County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2179,
                'state_id' => 16,
                'county' => 'Ford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2180,
                'state_id' => 16,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2181,
                'state_id' => 16,
                'county' => 'Gray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2182,
                'state_id' => 16,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2183,
                'state_id' => 16,
                'county' => 'Kearny County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2184,
                'state_id' => 16,
                'county' => 'Lane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2185,
                'state_id' => 16,
                'county' => 'Meade County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2186,
                'state_id' => 16,
                'county' => 'Finney County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2187,
                'state_id' => 16,
                'county' => 'Hodgeman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2188,
                'state_id' => 16,
                'county' => 'Stanton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2189,
                'state_id' => 16,
                'county' => 'Seward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2190,
                'state_id' => 16,
                'county' => 'Wichita County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2191,
                'state_id' => 16,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2192,
                'state_id' => 16,
                'county' => 'Haskell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2193,
                'state_id' => 16,
                'county' => 'Greeley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2194,
                'state_id' => 16,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2195,
                'state_id' => 16,
                'county' => 'Morton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2196,
                'state_id' => 16,
                'county' => 'Stevens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2197,
                'state_id' => 27,
                'county' => 'Butler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2198,
                'state_id' => 27,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2199,
                'state_id' => 27,
                'county' => 'Saunders County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2200,
                'state_id' => 27,
                'county' => 'Cuming County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2201,
                'state_id' => 27,
                'county' => 'Sarpy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2202,
                'state_id' => 27,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2203,
                'state_id' => 27,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2204,
                'state_id' => 27,
                'county' => 'Burt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2205,
                'state_id' => 27,
                'county' => 'Dodge County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2206,
                'state_id' => 27,
                'county' => 'Dakota County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2207,
                'state_id' => 27,
                'county' => 'Thurston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2208,
                'state_id' => 27,
                'county' => 'Gage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2209,
                'state_id' => 27,
                'county' => 'Thayer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2210,
                'state_id' => 27,
                'county' => 'Nemaha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2211,
                'state_id' => 27,
                'county' => 'Seward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2212,
                'state_id' => 27,
                'county' => 'York County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2213,
                'state_id' => 27,
                'county' => 'Lancaster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2214,
                'state_id' => 27,
                'county' => 'Pawnee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2215,
                'state_id' => 27,
                'county' => 'Otoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2216,
                'state_id' => 27,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2217,
                'state_id' => 27,
                'county' => 'Saline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2218,
                'state_id' => 27,
                'county' => 'Richardson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2219,
                'state_id' => 27,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2220,
                'state_id' => 27,
                'county' => 'Fillmore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2221,
                'state_id' => 27,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2222,
                'state_id' => 27,
                'county' => 'Platte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'state_id' => 27,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2224,
                'state_id' => 27,
                'county' => 'Wheeler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2225,
                'state_id' => 27,
                'county' => 'Nance County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2226,
                'state_id' => 27,
                'county' => 'Merrick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2227,
                'state_id' => 27,
                'county' => 'Colfax County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2228,
                'state_id' => 27,
                'county' => 'Antelope County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2229,
                'state_id' => 27,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2230,
                'state_id' => 27,
                'county' => 'Greeley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2231,
                'state_id' => 27,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2232,
                'state_id' => 27,
                'county' => 'Dixon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2233,
                'state_id' => 27,
                'county' => 'Holt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2234,
                'state_id' => 27,
                'county' => 'Rock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2235,
                'state_id' => 27,
                'county' => 'Cedar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2236,
                'state_id' => 27,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2237,
                'state_id' => 27,
                'county' => 'Boyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2238,
                'state_id' => 27,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2239,
                'state_id' => 27,
                'county' => 'Pierce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2240,
                'state_id' => 27,
                'county' => 'Keya Paha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2241,
                'state_id' => 27,
                'county' => 'Stanton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2242,
                'state_id' => 27,
                'county' => 'Hall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2243,
                'state_id' => 27,
                'county' => 'Buffalo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2244,
                'state_id' => 27,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2245,
                'state_id' => 27,
                'county' => 'Valley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2246,
                'state_id' => 27,
                'county' => 'Sherman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'state_id' => 27,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'state_id' => 27,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2249,
                'state_id' => 27,
                'county' => 'Blaine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2250,
                'state_id' => 27,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2251,
                'state_id' => 27,
                'county' => 'Dawson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2252,
                'state_id' => 27,
                'county' => 'Loup County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2253,
                'state_id' => 27,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2254,
                'state_id' => 27,
                'county' => 'Harlan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2255,
                'state_id' => 27,
                'county' => 'Furnas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'state_id' => 27,
                'county' => 'Phelps County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2257,
                'state_id' => 27,
                'county' => 'Kearney County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2258,
                'state_id' => 27,
                'county' => 'Webster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2259,
                'state_id' => 27,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2260,
                'state_id' => 27,
                'county' => 'Gosper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2261,
                'state_id' => 27,
                'county' => 'Nuckolls County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'state_id' => 27,
                'county' => 'Red Willow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2263,
                'state_id' => 27,
                'county' => 'Dundy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2264,
                'state_id' => 27,
                'county' => 'Chase County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2265,
                'state_id' => 27,
                'county' => 'Hitchcock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2266,
                'state_id' => 27,
                'county' => 'Frontier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2267,
                'state_id' => 27,
                'county' => 'Hayes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2268,
                'state_id' => 27,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2269,
                'state_id' => 27,
                'county' => 'Arthur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'state_id' => 27,
                'county' => 'Deuel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2271,
                'state_id' => 27,
                'county' => 'Morrill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'state_id' => 27,
                'county' => 'Keith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2273,
                'state_id' => 27,
                'county' => 'Kimball County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2274,
                'state_id' => 27,
                'county' => 'Cheyenne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2275,
                'state_id' => 27,
                'county' => 'Perkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2276,
                'state_id' => 27,
                'county' => 'Cherry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2277,
                'state_id' => 27,
                'county' => 'Thomas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2278,
                'state_id' => 27,
                'county' => 'Garden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2279,
                'state_id' => 27,
                'county' => 'Hooker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2280,
                'state_id' => 27,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2281,
                'state_id' => 27,
                'county' => 'McPherson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2282,
                'state_id' => 27,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2283,
                'state_id' => 27,
                'county' => 'Box Butte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2284,
                'state_id' => 27,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2285,
                'state_id' => 27,
                'county' => 'Sheridan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2286,
                'state_id' => 27,
                'county' => 'Dawes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2287,
                'state_id' => 27,
                'county' => 'Scotts Bluff County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2288,
                'state_id' => 27,
                'county' => 'Banner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2289,
                'state_id' => 27,
                'county' => 'Sioux County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2290,
                'state_id' => 18,
                'county' => 'Jefferson Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2291,
                'state_id' => 18,
                'county' => 'St Charles Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2292,
                'state_id' => 18,
                'county' => 'St Bernard Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2293,
                'state_id' => 18,
                'county' => 'Plaquemines Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2294,
                'state_id' => 18,
                'county' => 'St John the Baptist Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2295,
                'state_id' => 18,
                'county' => 'St James Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2296,
                'state_id' => 18,
                'county' => 'Orleans Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2297,
                'state_id' => 18,
                'county' => 'Lafourche Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2298,
                'state_id' => 18,
                'county' => 'Assumption Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2299,
                'state_id' => 18,
                'county' => 'St Mary Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2300,
                'state_id' => 18,
                'county' => 'Terrebonne Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2301,
                'state_id' => 18,
                'county' => 'Ascension Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2302,
                'state_id' => 18,
                'county' => 'Tangipahoa Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2303,
                'state_id' => 18,
                'county' => 'St Tammany Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2304,
                'state_id' => 18,
                'county' => 'Washington Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2305,
                'state_id' => 18,
                'county' => 'St Helena Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2306,
                'state_id' => 18,
                'county' => 'Livingston Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2307,
                'state_id' => 18,
                'county' => 'Lafayette Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2308,
                'state_id' => 18,
                'county' => 'Vermilion Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2309,
                'state_id' => 18,
                'county' => 'St Landry Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2310,
                'state_id' => 18,
                'county' => 'Iberia Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2311,
                'state_id' => 18,
                'county' => 'Evangeline Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2312,
                'state_id' => 18,
                'county' => 'Acadia Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2313,
                'state_id' => 18,
                'county' => 'St Martin Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2314,
                'state_id' => 18,
                'county' => 'Jefferson Davis Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2315,
                'state_id' => 18,
                'county' => 'Calcasieu Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2316,
                'state_id' => 18,
                'county' => 'Cameron Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2317,
                'state_id' => 18,
                'county' => 'Beauregard Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2318,
                'state_id' => 18,
                'county' => 'Allen Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2319,
                'state_id' => 18,
                'county' => 'Vernon Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2320,
                'state_id' => 18,
                'county' => 'East Baton Rouge Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2321,
                'state_id' => 18,
                'county' => 'West Baton Rouge Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2322,
                'state_id' => 18,
                'county' => 'West Feliciana Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2323,
                'state_id' => 18,
                'county' => 'Pointe Coupee Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2324,
                'state_id' => 18,
                'county' => 'Iberville Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2325,
                'state_id' => 18,
                'county' => 'East Feliciana Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2326,
                'state_id' => 18,
                'county' => 'Bienville Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2327,
                'state_id' => 18,
                'county' => 'Natchitoches Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'state_id' => 18,
                'county' => 'Claiborne Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2329,
                'state_id' => 18,
                'county' => 'Caddo Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2330,
                'state_id' => 18,
                'county' => 'Bossier Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2331,
                'state_id' => 18,
                'county' => 'Webster Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2332,
                'state_id' => 18,
                'county' => 'Red River Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2333,
                'state_id' => 18,
                'county' => 'De Soto Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2334,
                'state_id' => 18,
                'county' => 'Sabine Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2335,
                'state_id' => 18,
                'county' => 'Ouachita Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2336,
                'state_id' => 18,
                'county' => 'Richland Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2337,
                'state_id' => 18,
                'county' => 'Franklin Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2338,
                'state_id' => 18,
                'county' => 'Morehouse Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2339,
                'state_id' => 18,
                'county' => 'Union Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2340,
                'state_id' => 18,
                'county' => 'Jackson Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2341,
                'state_id' => 18,
                'county' => 'Lincoln Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2342,
                'state_id' => 18,
                'county' => 'Madison Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2343,
                'state_id' => 18,
                'county' => 'West Carroll Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2344,
                'state_id' => 18,
                'county' => 'Chicot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2345,
                'state_id' => 18,
                'county' => 'East Carroll Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2346,
                'state_id' => 18,
                'county' => 'Rapides Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2347,
                'state_id' => 18,
                'county' => 'Concordia Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2348,
                'state_id' => 18,
                'county' => 'Avoyelles Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2349,
                'state_id' => 18,
                'county' => 'Tensas Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2350,
                'state_id' => 18,
                'county' => 'Catahoula Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2351,
                'state_id' => 18,
                'county' => 'La Salle Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2352,
                'state_id' => 18,
                'county' => 'Winn Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2353,
                'state_id' => 18,
                'county' => 'Grant Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2354,
                'state_id' => 18,
                'county' => 'Caldwell Parish',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2355,
                'state_id' => 4,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2356,
                'state_id' => 4,
                'county' => 'Desha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2357,
                'state_id' => 4,
                'county' => 'Bradley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2358,
                'state_id' => 4,
                'county' => 'Ashley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2359,
                'state_id' => 4,
                'county' => 'Chicot County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2360,
                'state_id' => 4,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2361,
                'state_id' => 4,
                'county' => 'Cleveland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2362,
                'state_id' => 4,
                'county' => 'Drew County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2363,
                'state_id' => 4,
                'county' => 'Ouachita County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2364,
                'state_id' => 4,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2365,
                'state_id' => 4,
                'county' => 'Nevada County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2366,
                'state_id' => 4,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2367,
                'state_id' => 4,
                'county' => 'Dallas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2368,
                'state_id' => 4,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2369,
                'state_id' => 4,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2370,
                'state_id' => 4,
                'county' => 'Hempstead County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2371,
                'state_id' => 4,
                'county' => 'Little River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2372,
                'state_id' => 4,
                'county' => 'Sevier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2373,
                'state_id' => 4,
                'county' => 'Lafayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2374,
                'state_id' => 4,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2375,
                'state_id' => 4,
                'county' => 'Miller County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2376,
                'state_id' => 4,
                'county' => 'Garland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2377,
                'state_id' => 4,
                'county' => 'Saline County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2378,
                'state_id' => 4,
                'county' => 'Pike County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2379,
                'state_id' => 4,
                'county' => 'Hot Spring County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2380,
                'state_id' => 4,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'state_id' => 4,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2382,
                'state_id' => 4,
                'county' => 'Perry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2383,
                'state_id' => 4,
                'county' => 'Arkansas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2384,
                'state_id' => 4,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2385,
                'state_id' => 4,
                'county' => 'Woodruff County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2386,
                'state_id' => 4,
                'county' => 'Lonoke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2387,
                'state_id' => 4,
                'county' => 'White County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2388,
                'state_id' => 4,
                'county' => 'Van Buren County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2389,
                'state_id' => 4,
                'county' => 'Prairie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2390,
                'state_id' => 4,
                'county' => 'Monroe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2391,
                'state_id' => 4,
                'county' => 'Conway County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2392,
                'state_id' => 4,
                'county' => 'Faulkner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2393,
                'state_id' => 4,
                'county' => 'Cleburne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2394,
                'state_id' => 4,
                'county' => 'Stone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2395,
                'state_id' => 4,
                'county' => 'Pulaski County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2396,
                'state_id' => 4,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2397,
                'state_id' => 4,
                'county' => 'Independence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2398,
                'state_id' => 4,
                'county' => 'Crittenden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2399,
                'state_id' => 4,
                'county' => 'Mississippi County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2400,
                'state_id' => 4,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2401,
                'state_id' => 4,
                'county' => 'Phillips County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2402,
                'state_id' => 4,
                'county' => 'St Francis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2403,
                'state_id' => 4,
                'county' => 'Cross County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2404,
                'state_id' => 4,
                'county' => 'Poinsett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2405,
                'state_id' => 4,
                'county' => 'Craighead County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2406,
                'state_id' => 4,
                'county' => 'Lawrence County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2407,
                'state_id' => 4,
                'county' => 'Greene County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2408,
                'state_id' => 4,
                'county' => 'Randolph County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2409,
                'state_id' => 4,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2410,
                'state_id' => 4,
                'county' => 'Sharp County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2411,
                'state_id' => 4,
                'county' => 'Izard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2412,
                'state_id' => 4,
                'county' => 'Fulton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2413,
                'state_id' => 4,
                'county' => 'Baxter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2414,
                'state_id' => 4,
                'county' => 'Boone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2415,
                'state_id' => 4,
                'county' => 'Carroll County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2416,
                'state_id' => 4,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2417,
                'state_id' => 4,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2418,
                'state_id' => 4,
                'county' => 'Searcy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2419,
                'state_id' => 4,
                'county' => 'Pope County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2420,
                'state_id' => 4,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2421,
                'state_id' => 4,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2422,
                'state_id' => 4,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2423,
                'state_id' => 4,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2424,
                'state_id' => 4,
                'county' => 'Yell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2425,
                'state_id' => 4,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2426,
                'state_id' => 4,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2427,
                'state_id' => 4,
                'county' => 'Scott County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2428,
                'state_id' => 4,
                'county' => 'Sebastian County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2429,
                'state_id' => 4,
                'county' => 'Crawford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2430,
                'state_id' => 36,
                'county' => 'Caddo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2431,
                'state_id' => 36,
                'county' => 'Grady County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2432,
                'state_id' => 36,
                'county' => 'Oklahoma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2433,
                'state_id' => 36,
                'county' => 'McClain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2434,
                'state_id' => 36,
                'county' => 'Canadian County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2435,
                'state_id' => 36,
                'county' => 'Kingfisher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2436,
                'state_id' => 36,
                'county' => 'Cleveland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2437,
                'state_id' => 36,
                'county' => 'Washita County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2438,
                'state_id' => 36,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2439,
                'state_id' => 36,
                'county' => 'Murray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2440,
                'state_id' => 36,
                'county' => 'Blaine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2441,
                'state_id' => 36,
                'county' => 'Kiowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2442,
                'state_id' => 36,
                'county' => 'Garvin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2443,
                'state_id' => 36,
                'county' => 'Stephens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2444,
                'state_id' => 36,
                'county' => 'Noble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2445,
                'state_id' => 36,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2446,
                'state_id' => 43,
                'county' => 'Travis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2447,
                'state_id' => 36,
                'county' => 'Carter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2448,
                'state_id' => 36,
                'county' => 'Love County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2449,
                'state_id' => 36,
                'county' => 'Johnston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2450,
                'state_id' => 36,
                'county' => 'Marshall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2451,
                'state_id' => 36,
                'county' => 'Bryan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2452,
                'state_id' => 36,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2453,
                'state_id' => 36,
                'county' => 'Comanche County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2454,
                'state_id' => 36,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2455,
                'state_id' => 36,
                'county' => 'Tillman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2456,
                'state_id' => 36,
                'county' => 'Cotton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2457,
                'state_id' => 36,
                'county' => 'Harmon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2458,
                'state_id' => 36,
                'county' => 'Greer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2459,
                'state_id' => 36,
                'county' => 'Beckham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2460,
                'state_id' => 36,
                'county' => 'Roger Mills County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2461,
                'state_id' => 36,
                'county' => 'Dewey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2462,
                'state_id' => 36,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2463,
                'state_id' => 36,
                'county' => 'Alfalfa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2464,
                'state_id' => 36,
                'county' => 'Woods County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2465,
                'state_id' => 36,
                'county' => 'Major County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2466,
                'state_id' => 36,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2467,
                'state_id' => 36,
                'county' => 'Woodward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2468,
                'state_id' => 36,
                'county' => 'Ellis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2469,
                'state_id' => 36,
                'county' => 'Harper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2470,
                'state_id' => 36,
                'county' => 'Beaver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2471,
                'state_id' => 36,
                'county' => 'Texas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2472,
                'state_id' => 36,
                'county' => 'Cimarron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2473,
                'state_id' => 36,
                'county' => 'Osage County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2474,
                'state_id' => 36,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2475,
                'state_id' => 36,
                'county' => 'Tulsa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2476,
                'state_id' => 36,
                'county' => 'Creek County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2477,
                'state_id' => 36,
                'county' => 'Wagoner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2478,
                'state_id' => 36,
                'county' => 'Rogers County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2479,
                'state_id' => 36,
                'county' => 'Pawnee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2480,
                'state_id' => 36,
                'county' => 'Payne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2481,
                'state_id' => 36,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2482,
                'state_id' => 36,
                'county' => 'Nowata County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2483,
                'state_id' => 36,
                'county' => 'Craig County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2484,
                'state_id' => 36,
                'county' => 'Mayes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2485,
                'state_id' => 36,
                'county' => 'Delaware County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2486,
                'state_id' => 36,
                'county' => 'Ottawa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2487,
                'state_id' => 36,
                'county' => 'Muskogee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2488,
                'state_id' => 36,
                'county' => 'Okmulgee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2489,
                'state_id' => 36,
                'county' => 'Pittsburg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2490,
                'state_id' => 36,
                'county' => 'McIntosh County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2491,
                'state_id' => 36,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2492,
                'state_id' => 36,
                'county' => 'Sequoyah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2493,
                'state_id' => 36,
                'county' => 'Haskell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2494,
                'state_id' => 36,
                'county' => 'Adair County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2495,
                'state_id' => 36,
                'county' => 'Pushmataha County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2496,
                'state_id' => 36,
                'county' => 'Atoka County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2497,
                'state_id' => 36,
                'county' => 'Hughes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2498,
                'state_id' => 36,
                'county' => 'Coal County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2499,
                'state_id' => 36,
                'county' => 'Latimer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2500,
                'state_id' => 36,
                'county' => 'Le Flore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'state_id' => 36,
                'county' => 'Kay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2502,
                'state_id' => 36,
                'county' => 'McCurtain County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2503,
                'state_id' => 36,
                'county' => 'Choctaw County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2504,
                'state_id' => 36,
                'county' => 'Pottawatomie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2505,
                'state_id' => 36,
                'county' => 'Seminole County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2506,
                'state_id' => 36,
                'county' => 'Pontotoc County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2507,
                'state_id' => 36,
                'county' => 'Okfuskee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2508,
                'state_id' => 43,
                'county' => 'Dallas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2509,
                'state_id' => 43,
                'county' => 'Collin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2510,
                'state_id' => 43,
                'county' => 'Denton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2511,
                'state_id' => 43,
                'county' => 'Grayson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2512,
                'state_id' => 43,
                'county' => 'Rockwall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2513,
                'state_id' => 43,
                'county' => 'Tarrant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2514,
                'state_id' => 43,
                'county' => 'Ellis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2515,
                'state_id' => 43,
                'county' => 'Navarro County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2516,
                'state_id' => 43,
                'county' => 'Van Zandt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2517,
                'state_id' => 43,
                'county' => 'Kaufman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2518,
                'state_id' => 43,
                'county' => 'Henderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2519,
                'state_id' => 43,
                'county' => 'Hunt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2520,
                'state_id' => 43,
                'county' => 'Wood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2521,
                'state_id' => 43,
                'county' => 'Lamar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2522,
                'state_id' => 43,
                'county' => 'Red River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2523,
                'state_id' => 43,
                'county' => 'Fannin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2524,
                'state_id' => 43,
                'county' => 'Delta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2525,
                'state_id' => 43,
                'county' => 'Hopkins County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2526,
                'state_id' => 43,
                'county' => 'Rains County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2527,
                'state_id' => 43,
                'county' => 'Camp County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2528,
                'state_id' => 43,
                'county' => 'Titus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2529,
                'state_id' => 43,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2530,
                'state_id' => 43,
                'county' => 'Bowie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2531,
                'state_id' => 43,
                'county' => 'Cass County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2532,
                'state_id' => 43,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2533,
                'state_id' => 43,
                'county' => 'Morris County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2534,
                'state_id' => 43,
                'county' => 'Gregg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2535,
                'state_id' => 43,
                'county' => 'Panola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2536,
                'state_id' => 43,
                'county' => 'Upshur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2537,
                'state_id' => 43,
                'county' => 'Rusk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2538,
                'state_id' => 43,
                'county' => 'Harrison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2539,
                'state_id' => 43,
                'county' => 'Smith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2540,
                'state_id' => 43,
                'county' => 'Cherokee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2541,
                'state_id' => 43,
                'county' => 'Nacogdoches County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2542,
                'state_id' => 43,
                'county' => 'Anderson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2543,
                'state_id' => 43,
                'county' => 'Leon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2544,
                'state_id' => 43,
                'county' => 'Trinity County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2545,
                'state_id' => 43,
                'county' => 'Houston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2546,
                'state_id' => 43,
                'county' => 'Freestone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2547,
                'state_id' => 43,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2548,
                'state_id' => 43,
                'county' => 'Angelina County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2549,
                'state_id' => 43,
                'county' => 'Newton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2550,
                'state_id' => 43,
                'county' => 'San Augustine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2551,
                'state_id' => 43,
                'county' => 'Sabine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2552,
                'state_id' => 43,
                'county' => 'Jasper County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2553,
                'state_id' => 43,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2554,
                'state_id' => 43,
                'county' => 'Shelby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2555,
                'state_id' => 43,
                'county' => 'Tyler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2556,
                'state_id' => 43,
                'county' => 'Parker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2557,
                'state_id' => 43,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2558,
                'state_id' => 43,
                'county' => 'Wise County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2559,
                'state_id' => 43,
                'county' => 'Hood County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2560,
                'state_id' => 43,
                'county' => 'Somervell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2561,
                'state_id' => 43,
                'county' => 'Hill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2562,
                'state_id' => 43,
                'county' => 'Palo Pinto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2563,
                'state_id' => 43,
                'county' => 'Clay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2564,
                'state_id' => 43,
                'county' => 'Montague County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2565,
                'state_id' => 43,
                'county' => 'Cooke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2566,
                'state_id' => 43,
                'county' => 'Wichita County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2567,
                'state_id' => 43,
                'county' => 'Archer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2568,
                'state_id' => 43,
                'county' => 'Knox County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2569,
                'state_id' => 43,
                'county' => 'Wilbarger County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2570,
                'state_id' => 43,
                'county' => 'Young County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2571,
                'state_id' => 43,
                'county' => 'Baylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2572,
                'state_id' => 43,
                'county' => 'Haskell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2573,
                'state_id' => 43,
                'county' => 'Erath County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2574,
                'state_id' => 43,
                'county' => 'Stephens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2575,
                'state_id' => 43,
                'county' => 'Jack County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2576,
                'state_id' => 43,
                'county' => 'Shackelford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2577,
                'state_id' => 43,
                'county' => 'Brown County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2578,
                'state_id' => 43,
                'county' => 'Eastland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2579,
                'state_id' => 43,
                'county' => 'Hamilton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2580,
                'state_id' => 43,
                'county' => 'Comanche County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2581,
                'state_id' => 43,
                'county' => 'Callahan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2582,
                'state_id' => 43,
                'county' => 'Throckmorton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2583,
                'state_id' => 43,
                'county' => 'Bell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2584,
                'state_id' => 43,
                'county' => 'Milam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2585,
                'state_id' => 43,
                'county' => 'Coryell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2586,
                'state_id' => 43,
                'county' => 'Falls County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2587,
                'state_id' => 43,
                'county' => 'Williamson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2588,
                'state_id' => 43,
                'county' => 'Lampasas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2589,
                'state_id' => 43,
                'county' => 'McLennan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2590,
                'state_id' => 43,
                'county' => 'Robertson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2591,
                'state_id' => 43,
                'county' => 'Bosque County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2592,
                'state_id' => 43,
                'county' => 'Limestone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2593,
                'state_id' => 43,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2594,
                'state_id' => 43,
                'county' => 'Runnels County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2595,
                'state_id' => 43,
                'county' => 'San Saba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2596,
                'state_id' => 43,
                'county' => 'McCulloch County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2597,
                'state_id' => 43,
                'county' => 'Coleman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2598,
                'state_id' => 43,
                'county' => 'Llano County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2599,
                'state_id' => 43,
                'county' => 'Concho County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2600,
                'state_id' => 43,
                'county' => 'Menard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2601,
                'state_id' => 43,
                'county' => 'Mills County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2602,
                'state_id' => 43,
                'county' => 'Kimble County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2603,
                'state_id' => 43,
                'county' => 'Tom Green County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2604,
                'state_id' => 43,
                'county' => 'Irion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2605,
                'state_id' => 43,
                'county' => 'Reagan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2606,
                'state_id' => 43,
                'county' => 'Coke County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2607,
                'state_id' => 43,
                'county' => 'Schleicher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2608,
                'state_id' => 43,
                'county' => 'Crockett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2609,
                'state_id' => 43,
                'county' => 'Sutton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2610,
                'state_id' => 43,
                'county' => 'Sterling County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2611,
                'state_id' => 43,
                'county' => 'Harris County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2612,
                'state_id' => 43,
                'county' => 'Montgomery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2613,
                'state_id' => 43,
                'county' => 'Walker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2614,
                'state_id' => 43,
                'county' => 'Liberty County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2615,
                'state_id' => 43,
                'county' => 'San Jacinto County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2616,
                'state_id' => 43,
                'county' => 'Grimes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2617,
                'state_id' => 43,
                'county' => 'Hardin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2618,
                'state_id' => 43,
                'county' => 'Matagorda County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2619,
                'state_id' => 43,
                'county' => 'Fort Bend County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2620,
                'state_id' => 43,
                'county' => 'Colorado County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2621,
                'state_id' => 43,
                'county' => 'Austin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2622,
                'state_id' => 43,
                'county' => 'Wharton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2623,
                'state_id' => 43,
                'county' => 'Brazoria County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2624,
                'state_id' => 43,
                'county' => 'Waller County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2625,
                'state_id' => 43,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2626,
                'state_id' => 43,
                'county' => 'Galveston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2627,
                'state_id' => 43,
                'county' => 'Chambers County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2628,
                'state_id' => 43,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2629,
                'state_id' => 43,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2630,
                'state_id' => 43,
                'county' => 'Brazos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2631,
                'state_id' => 43,
                'county' => 'Burleson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2632,
                'state_id' => 43,
                'county' => 'Lee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2633,
                'state_id' => 43,
                'county' => 'Victoria County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2634,
                'state_id' => 43,
                'county' => 'Refugio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2635,
                'state_id' => 43,
                'county' => 'De Witt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2636,
                'state_id' => 43,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2637,
                'state_id' => 43,
                'county' => 'Goliad County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2638,
                'state_id' => 43,
                'county' => 'Lavaca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2639,
                'state_id' => 43,
                'county' => 'Calhoun County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2640,
                'state_id' => 43,
                'county' => 'La Salle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2641,
                'state_id' => 43,
                'county' => 'Bexar County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2642,
                'state_id' => 43,
                'county' => 'Bandera County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2643,
                'state_id' => 43,
                'county' => 'Kendall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2644,
                'state_id' => 43,
                'county' => 'Frio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2645,
                'state_id' => 43,
                'county' => 'McMullen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2646,
                'state_id' => 43,
                'county' => 'Atascosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2647,
                'state_id' => 43,
                'county' => 'Medina County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2648,
                'state_id' => 43,
                'county' => 'Kerr County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2649,
                'state_id' => 43,
                'county' => 'Live Oak County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2650,
                'state_id' => 43,
                'county' => 'Webb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2651,
                'state_id' => 43,
                'county' => 'Zapata County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2652,
                'state_id' => 43,
                'county' => 'Comal County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2653,
                'state_id' => 43,
                'county' => 'Bee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2654,
                'state_id' => 43,
                'county' => 'Guadalupe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2655,
                'state_id' => 43,
                'county' => 'Karnes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2656,
                'state_id' => 43,
                'county' => 'Wilson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2657,
                'state_id' => 43,
                'county' => 'Gonzales County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2658,
                'state_id' => 43,
                'county' => 'Nueces County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2659,
                'state_id' => 43,
                'county' => 'Jim Wells County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2660,
                'state_id' => 43,
                'county' => 'San Patricio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2661,
                'state_id' => 43,
                'county' => 'Kenedy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2662,
                'state_id' => 43,
                'county' => 'Duval County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2663,
                'state_id' => 43,
                'county' => 'Brooks County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2664,
                'state_id' => 43,
                'county' => 'Aransas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2665,
                'state_id' => 43,
                'county' => 'Jim Hogg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2666,
                'state_id' => 43,
                'county' => 'Kleberg County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2667,
                'state_id' => 43,
                'county' => 'Hidalgo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2668,
                'state_id' => 43,
                'county' => 'Cameron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2669,
                'state_id' => 43,
                'county' => 'Starr County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2670,
                'state_id' => 43,
                'county' => 'Willacy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2671,
                'state_id' => 43,
                'county' => 'Bastrop County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2672,
                'state_id' => 43,
                'county' => 'Burnet County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2673,
                'state_id' => 43,
                'county' => 'Blanco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2674,
                'state_id' => 43,
                'county' => 'Hays County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2675,
                'state_id' => 43,
                'county' => 'Caldwell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2676,
                'state_id' => 43,
                'county' => 'Gillespie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2677,
                'state_id' => 43,
                'county' => 'Uvalde County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2678,
                'state_id' => 43,
                'county' => 'Dimmit County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2679,
                'state_id' => 43,
                'county' => 'Edwards County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2680,
                'state_id' => 43,
                'county' => 'Zavala County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2681,
                'state_id' => 43,
                'county' => 'Kinney County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2682,
                'state_id' => 43,
                'county' => 'Real County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2683,
                'state_id' => 43,
                'county' => 'Val Verde County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2684,
                'state_id' => 43,
                'county' => 'Terrell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2685,
                'state_id' => 43,
                'county' => 'Maverick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2686,
                'state_id' => 43,
                'county' => 'Fayette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2687,
                'state_id' => 43,
                'county' => 'Oldham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2688,
                'state_id' => 43,
                'county' => 'Gray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2689,
                'state_id' => 43,
                'county' => 'Wheeler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2690,
                'state_id' => 43,
                'county' => 'Lipscomb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2691,
                'state_id' => 43,
                'county' => 'Hutchinson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2692,
                'state_id' => 43,
                'county' => 'Parmer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2693,
                'state_id' => 43,
                'county' => 'Potter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2694,
                'state_id' => 43,
                'county' => 'Moore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2695,
                'state_id' => 43,
                'county' => 'Hemphill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2696,
                'state_id' => 43,
                'county' => 'Randall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2697,
                'state_id' => 43,
                'county' => 'Hartley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2698,
                'state_id' => 43,
                'county' => 'Armstrong County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2699,
                'state_id' => 43,
                'county' => 'Hale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2700,
                'state_id' => 43,
                'county' => 'Dallam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2701,
                'state_id' => 43,
                'county' => 'Deaf Smith County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2702,
                'state_id' => 43,
                'county' => 'Castro County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2703,
                'state_id' => 43,
                'county' => 'Lamb County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2704,
                'state_id' => 43,
                'county' => 'Ochiltree County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2705,
                'state_id' => 43,
                'county' => 'Carson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2706,
                'state_id' => 43,
                'county' => 'Hansford County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2707,
                'state_id' => 43,
                'county' => 'Swisher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2708,
                'state_id' => 43,
                'county' => 'Roberts County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2709,
                'state_id' => 43,
                'county' => 'Collingsworth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2710,
                'state_id' => 43,
                'county' => 'Sherman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2711,
                'state_id' => 43,
                'county' => 'Childress County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2712,
                'state_id' => 43,
                'county' => 'Dickens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2713,
                'state_id' => 43,
                'county' => 'Floyd County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2714,
                'state_id' => 43,
                'county' => 'Cottle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2715,
                'state_id' => 43,
                'county' => 'Hardeman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2716,
                'state_id' => 43,
                'county' => 'Donley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2717,
                'state_id' => 43,
                'county' => 'Foard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2718,
                'state_id' => 43,
                'county' => 'Hall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2719,
                'state_id' => 43,
                'county' => 'Motley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2720,
                'state_id' => 43,
                'county' => 'King County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2721,
                'state_id' => 43,
                'county' => 'Briscoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2722,
                'state_id' => 43,
                'county' => 'Hockley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2723,
                'state_id' => 43,
                'county' => 'Cochran County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2724,
                'state_id' => 43,
                'county' => 'Terry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2725,
                'state_id' => 43,
                'county' => 'Bailey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2726,
                'state_id' => 43,
                'county' => 'Crosby County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2727,
                'state_id' => 43,
                'county' => 'Yoakum County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2728,
                'state_id' => 43,
                'county' => 'Lubbock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2729,
                'state_id' => 43,
                'county' => 'Garza County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2730,
                'state_id' => 43,
                'county' => 'Dawson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2731,
                'state_id' => 43,
                'county' => 'Gaines County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2732,
                'state_id' => 43,
                'county' => 'Lynn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2733,
                'state_id' => 43,
                'county' => 'Jones County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2734,
                'state_id' => 43,
                'county' => 'Stonewall County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2735,
                'state_id' => 43,
                'county' => 'Nolan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2736,
                'state_id' => 43,
                'county' => 'Taylor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2737,
                'state_id' => 43,
                'county' => 'Howard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2738,
                'state_id' => 43,
                'county' => 'Mitchell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2739,
                'state_id' => 43,
                'county' => 'Scurry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2740,
                'state_id' => 43,
                'county' => 'Kent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2741,
                'state_id' => 43,
                'county' => 'Fisher County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2742,
                'state_id' => 43,
                'county' => 'Midland County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2743,
                'state_id' => 43,
                'county' => 'Andrews County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2744,
                'state_id' => 43,
                'county' => 'Reeves County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2745,
                'state_id' => 43,
                'county' => 'Ward County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2746,
                'state_id' => 43,
                'county' => 'Pecos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2747,
                'state_id' => 43,
                'county' => 'Crane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2748,
                'state_id' => 43,
                'county' => 'Jeff Davis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2749,
                'state_id' => 43,
                'county' => 'Borden County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2750,
                'state_id' => 43,
                'county' => 'Glasscock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2751,
                'state_id' => 43,
                'county' => 'Ector County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2752,
                'state_id' => 43,
                'county' => 'Winkler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2753,
                'state_id' => 43,
                'county' => 'Martin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2754,
                'state_id' => 43,
                'county' => 'Upton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2755,
                'state_id' => 43,
                'county' => 'Loving County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2756,
                'state_id' => 43,
                'county' => 'El Paso County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2757,
                'state_id' => 43,
                'county' => 'Brewster County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2758,
                'state_id' => 43,
                'county' => 'Hudspeth County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2759,
                'state_id' => 43,
                'county' => 'Presidio County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2760,
                'state_id' => 43,
                'county' => 'Culberson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2761,
                'state_id' => 6,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2762,
                'state_id' => 6,
                'county' => 'Arapahoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2763,
                'state_id' => 6,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2764,
                'state_id' => 6,
                'county' => 'Broomfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2765,
                'state_id' => 6,
                'county' => 'Boulder County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2766,
                'state_id' => 6,
                'county' => 'Elbert County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2767,
                'state_id' => 6,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2768,
                'state_id' => 6,
                'county' => 'Denver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2769,
                'state_id' => 6,
                'county' => 'El Paso County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2770,
                'state_id' => 6,
                'county' => 'Park County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2771,
                'state_id' => 6,
                'county' => 'Gilpin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2772,
                'state_id' => 6,
                'county' => 'Eagle County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2773,
                'state_id' => 6,
                'county' => 'Summit County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2774,
                'state_id' => 6,
                'county' => 'Routt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2775,
                'state_id' => 6,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2776,
                'state_id' => 6,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2777,
                'state_id' => 6,
                'county' => 'Clear Creek County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2778,
                'state_id' => 6,
                'county' => 'Grand County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2779,
                'state_id' => 6,
                'county' => 'Weld County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2780,
                'state_id' => 6,
                'county' => 'Larimer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2781,
                'state_id' => 6,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2782,
                'state_id' => 6,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2783,
                'state_id' => 6,
                'county' => 'Phillips County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2784,
                'state_id' => 6,
                'county' => 'Logan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2785,
                'state_id' => 6,
                'county' => 'Yuma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2786,
                'state_id' => 6,
                'county' => 'Sedgwick County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2787,
                'state_id' => 6,
                'county' => 'Cheyenne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2788,
                'state_id' => 6,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2789,
                'state_id' => 6,
                'county' => 'Kit Carson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2790,
                'state_id' => 6,
                'county' => 'Teller County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2791,
                'state_id' => 6,
                'county' => 'Pueblo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2792,
                'state_id' => 6,
                'county' => 'Las Animas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2793,
                'state_id' => 6,
                'county' => 'Kiowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2794,
                'state_id' => 6,
                'county' => 'Baca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2795,
                'state_id' => 6,
                'county' => 'Otero County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2796,
                'state_id' => 6,
                'county' => 'Crowley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2797,
                'state_id' => 6,
                'county' => 'Bent County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2798,
                'state_id' => 6,
                'county' => 'Huerfano County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2799,
                'state_id' => 6,
                'county' => 'Prowers County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2800,
                'state_id' => 6,
                'county' => 'Alamosa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2801,
                'state_id' => 6,
                'county' => 'Conejos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2802,
                'state_id' => 6,
                'county' => 'Archuleta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2803,
                'state_id' => 6,
                'county' => 'La Plata County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2804,
                'state_id' => 6,
                'county' => 'Costilla County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2805,
                'state_id' => 6,
                'county' => 'Saguache County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2806,
                'state_id' => 6,
                'county' => 'Mineral County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2807,
                'state_id' => 6,
                'county' => 'Rio Grande County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2808,
                'state_id' => 6,
                'county' => 'Chaffee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2809,
                'state_id' => 6,
                'county' => 'Gunnison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2810,
                'state_id' => 6,
                'county' => 'Fremont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2811,
                'state_id' => 6,
                'county' => 'Hinsdale County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2812,
                'state_id' => 6,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2813,
                'state_id' => 6,
                'county' => 'Dolores County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2814,
                'state_id' => 6,
                'county' => 'Montezuma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2815,
                'state_id' => 6,
                'county' => 'San Miguel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2816,
                'state_id' => 6,
                'county' => 'Montrose County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2817,
                'state_id' => 6,
                'county' => 'Delta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2818,
                'state_id' => 6,
                'county' => 'Ouray County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2819,
                'state_id' => 6,
                'county' => 'San Juan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2820,
                'state_id' => 6,
                'county' => 'Mesa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2821,
                'state_id' => 6,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2822,
                'state_id' => 6,
                'county' => 'Moffat County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2823,
                'state_id' => 6,
                'county' => 'Pitkin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2824,
                'state_id' => 6,
                'county' => 'Rio Blanco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2825,
                'state_id' => 50,
                'county' => 'Laramie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2826,
                'state_id' => 50,
                'county' => 'Albany County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2827,
                'state_id' => 50,
                'county' => 'Park County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2828,
                'state_id' => 50,
                'county' => 'Platte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2829,
                'state_id' => 50,
                'county' => 'Goshen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2830,
                'state_id' => 50,
                'county' => 'Niobrara County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2831,
                'state_id' => 50,
                'county' => 'Converse County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2832,
                'state_id' => 50,
                'county' => 'Carbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2833,
                'state_id' => 50,
                'county' => 'Fremont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2834,
                'state_id' => 50,
                'county' => 'Sweetwater County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2835,
                'state_id' => 50,
                'county' => 'Washakie County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2836,
                'state_id' => 50,
                'county' => 'Big Horn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2837,
                'state_id' => 50,
                'county' => 'Hot Springs County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2838,
                'state_id' => 50,
                'county' => 'Natrona County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2839,
                'state_id' => 50,
                'county' => 'Johnson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2840,
                'state_id' => 50,
                'county' => 'Weston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2841,
                'state_id' => 50,
                'county' => 'Crook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2842,
                'state_id' => 50,
                'county' => 'Campbell County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2843,
                'state_id' => 50,
                'county' => 'Sheridan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2844,
                'state_id' => 50,
                'county' => 'Sublette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2845,
                'state_id' => 50,
                'county' => 'Uinta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2846,
                'state_id' => 50,
                'county' => 'Teton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2847,
                'state_id' => 50,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2848,
                'state_id' => 12,
                'county' => 'Bannock County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2849,
                'state_id' => 12,
                'county' => 'Bingham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2850,
                'state_id' => 12,
                'county' => 'Power County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2851,
                'state_id' => 12,
                'county' => 'Butte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2852,
                'state_id' => 12,
                'county' => 'Caribou County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2853,
                'state_id' => 12,
                'county' => 'Bear Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2854,
                'state_id' => 12,
                'county' => 'Custer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2855,
                'state_id' => 12,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2856,
                'state_id' => 12,
                'county' => 'Lemhi County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2857,
                'state_id' => 12,
                'county' => 'Oneida County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2858,
                'state_id' => 12,
                'county' => 'Twin Falls County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2859,
                'state_id' => 12,
                'county' => 'Cassia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2860,
                'state_id' => 12,
                'county' => 'Blaine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2861,
                'state_id' => 12,
                'county' => 'Gooding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2862,
                'state_id' => 12,
                'county' => 'Camas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2863,
                'state_id' => 12,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2864,
                'state_id' => 12,
                'county' => 'Jerome County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2865,
                'state_id' => 12,
                'county' => 'Minidoka County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2866,
                'state_id' => 12,
                'county' => 'Bonneville County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2867,
                'state_id' => 12,
                'county' => 'Fremont County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2868,
                'state_id' => 12,
                'county' => 'Teton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2869,
                'state_id' => 12,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2870,
                'state_id' => 12,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2871,
                'state_id' => 12,
                'county' => 'Madison County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2872,
                'state_id' => 12,
                'county' => 'Nez Perce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2873,
                'state_id' => 12,
                'county' => 'Clearwater County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2874,
                'state_id' => 12,
                'county' => 'Idaho County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2875,
                'state_id' => 12,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2876,
                'state_id' => 12,
                'county' => 'Latah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2877,
                'state_id' => 12,
                'county' => 'Elmore County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2878,
                'state_id' => 12,
                'county' => 'Boise County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2879,
                'state_id' => 12,
                'county' => 'Owyhee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2880,
                'state_id' => 12,
                'county' => 'Canyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2881,
                'state_id' => 12,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2882,
                'state_id' => 12,
                'county' => 'Valley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2883,
                'state_id' => 12,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2884,
                'state_id' => 12,
                'county' => 'Ada County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2885,
                'state_id' => 12,
                'county' => 'Gem County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2886,
                'state_id' => 12,
                'county' => 'Payette County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2887,
                'state_id' => 12,
                'county' => 'Kootenai County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2888,
                'state_id' => 12,
                'county' => 'Shoshone County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2889,
                'state_id' => 12,
                'county' => 'Bonner County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2890,
                'state_id' => 12,
                'county' => 'Boundary County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2891,
                'state_id' => 12,
                'county' => 'Benewah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2892,
                'state_id' => 44,
                'county' => 'Duchesne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2893,
                'state_id' => 44,
                'county' => 'Utah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2894,
                'state_id' => 44,
                'county' => 'Salt Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2895,
                'state_id' => 44,
                'county' => 'Uintah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2896,
                'state_id' => 44,
                'county' => 'Davis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2897,
                'state_id' => 44,
                'county' => 'Summit County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2898,
                'state_id' => 44,
                'county' => 'Morgan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2899,
                'state_id' => 44,
                'county' => 'Tooele County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2900,
                'state_id' => 44,
                'county' => 'Daggett County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2901,
                'state_id' => 44,
                'county' => 'Rich County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2902,
                'state_id' => 44,
                'county' => 'Wasatch County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2903,
                'state_id' => 44,
                'county' => 'Weber County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2904,
                'state_id' => 44,
                'county' => 'Box Elder County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2905,
                'state_id' => 44,
                'county' => 'Cache County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2906,
                'state_id' => 44,
                'county' => 'Carbon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2907,
                'state_id' => 44,
                'county' => 'San Juan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2908,
                'state_id' => 44,
                'county' => 'Emery County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2909,
                'state_id' => 44,
                'county' => 'Grand County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2910,
                'state_id' => 44,
                'county' => 'Sevier County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2911,
                'state_id' => 44,
                'county' => 'Sanpete County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2912,
                'state_id' => 44,
                'county' => 'Millard County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2913,
                'state_id' => 44,
                'county' => 'Juab County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2914,
                'state_id' => 44,
                'county' => 'Kane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2915,
                'state_id' => 44,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2916,
                'state_id' => 44,
                'county' => 'Beaver County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2917,
                'state_id' => 44,
                'county' => 'Iron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2918,
                'state_id' => 44,
                'county' => 'Wayne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2919,
                'state_id' => 44,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2920,
                'state_id' => 44,
                'county' => 'Piute County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2921,
                'state_id' => 3,
                'county' => 'Maricopa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2922,
                'state_id' => 3,
                'county' => 'Pinal County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2923,
                'state_id' => 3,
                'county' => 'Gila County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2924,
                'state_id' => 3,
                'county' => 'Pima County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2925,
                'state_id' => 3,
                'county' => 'Yavapai County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2926,
                'state_id' => 3,
                'county' => 'La Paz County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2927,
                'state_id' => 3,
                'county' => 'Yuma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2928,
                'state_id' => 3,
                'county' => 'Mohave County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2929,
                'state_id' => 3,
                'county' => 'Graham County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2930,
                'state_id' => 3,
                'county' => 'Greenlee County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2931,
                'state_id' => 3,
                'county' => 'Cochise County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2932,
                'state_id' => 3,
                'county' => 'Santa Cruz County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2933,
                'state_id' => 3,
                'county' => 'Navajo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2934,
                'state_id' => 3,
                'county' => 'Apache County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2935,
                'state_id' => 3,
                'county' => 'Coconino County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2936,
                'state_id' => 31,
                'county' => 'Sandoval County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2937,
                'state_id' => 31,
                'county' => 'Valencia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2938,
                'state_id' => 31,
                'county' => 'Cibola County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2939,
                'state_id' => 31,
                'county' => 'Socorro County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2940,
                'state_id' => 31,
                'county' => 'Bernalillo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2941,
                'state_id' => 31,
                'county' => 'Torrance County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2942,
                'state_id' => 31,
                'county' => 'Santa Fe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2943,
                'state_id' => 31,
                'county' => 'Rio Arriba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2944,
                'state_id' => 31,
                'county' => 'San Juan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2945,
                'state_id' => 31,
                'county' => 'McKinley County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2946,
                'state_id' => 31,
                'county' => 'Taos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2947,
                'state_id' => 31,
                'county' => 'San Miguel County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2948,
                'state_id' => 31,
                'county' => 'Los Alamos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2949,
                'state_id' => 31,
                'county' => 'Colfax County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2950,
                'state_id' => 31,
                'county' => 'Guadalupe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2951,
                'state_id' => 31,
                'county' => 'Mora County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2952,
                'state_id' => 31,
                'county' => 'Harding County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2953,
                'state_id' => 31,
                'county' => 'Catron County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2954,
                'state_id' => 31,
                'county' => 'Sierra County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2955,
                'state_id' => 31,
                'county' => 'Dona Ana County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2956,
                'state_id' => 31,
                'county' => 'DoÃ±a Ana County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2957,
                'state_id' => 31,
                'county' => 'Hidalgo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2958,
                'state_id' => 31,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2959,
                'state_id' => 31,
                'county' => 'Luna County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2960,
                'state_id' => 31,
                'county' => 'Curry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2961,
                'state_id' => 31,
                'county' => 'Roosevelt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2962,
                'state_id' => 31,
                'county' => 'Lea County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2963,
                'state_id' => 31,
                'county' => 'De Baca County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2964,
                'state_id' => 31,
                'county' => 'Quay County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2965,
                'state_id' => 31,
                'county' => 'Chaves County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2966,
                'state_id' => 31,
                'county' => 'Eddy County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2967,
                'state_id' => 31,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2968,
                'state_id' => 31,
                'county' => 'Otero County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2969,
                'state_id' => 31,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2970,
                'state_id' => 28,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2971,
                'state_id' => 28,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2972,
                'state_id' => 28,
                'county' => 'Nye County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2973,
                'state_id' => 28,
                'county' => 'Esmeralda County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2974,
                'state_id' => 28,
                'county' => 'White Pine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2975,
                'state_id' => 28,
                'county' => 'Lander County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2976,
                'state_id' => 28,
                'county' => 'Eureka County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2977,
                'state_id' => 28,
                'county' => 'Washoe County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2978,
                'state_id' => 28,
                'county' => 'Lyon County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2979,
                'state_id' => 28,
                'county' => 'Humboldt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2980,
                'state_id' => 28,
                'county' => 'Churchill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2981,
                'state_id' => 28,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2982,
                'state_id' => 28,
                'county' => 'Mineral County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2983,
                'state_id' => 28,
                'county' => 'Pershing County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2984,
                'state_id' => 28,
                'county' => 'Storey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2985,
                'state_id' => 28,
                'county' => 'Carson City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2986,
                'state_id' => 28,
                'county' => 'Elko County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2987,
                'state_id' => 5,
                'county' => 'Los Angeles County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2988,
                'state_id' => 5,
                'county' => 'Orange County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2989,
                'state_id' => 5,
                'county' => 'Ventura County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2990,
                'state_id' => 5,
                'county' => 'San Bernardino County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2991,
                'state_id' => 5,
                'county' => 'Riverside County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2992,
                'state_id' => 5,
                'county' => 'San Diego County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2993,
                'state_id' => 5,
                'county' => 'Imperial County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2994,
                'state_id' => 5,
                'county' => 'Inyo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2995,
                'state_id' => 5,
                'county' => 'Santa Barbara County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2996,
                'state_id' => 5,
                'county' => 'Tulare County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2997,
                'state_id' => 5,
                'county' => 'Kings County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2998,
                'state_id' => 5,
                'county' => 'Kern County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2999,
                'state_id' => 5,
                'county' => 'Fresno County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 3000,
                'state_id' => 5,
                'county' => 'San Luis Obispo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'state_id' => 5,
                'county' => 'Monterey County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3002,
                'state_id' => 5,
                'county' => 'Mono County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3003,
                'state_id' => 5,
                'county' => 'Madera County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3004,
                'state_id' => 5,
                'county' => 'Merced County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3005,
                'state_id' => 5,
                'county' => 'Mariposa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3006,
                'state_id' => 5,
                'county' => 'San Mateo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 3007,
                'state_id' => 5,
                'county' => 'Santa Clara County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3008,
                'state_id' => 5,
                'county' => 'San Francisco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3009,
                'state_id' => 5,
                'county' => 'Sacramento County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 3010,
                'state_id' => 5,
                'county' => 'Alameda County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3011,
                'state_id' => 5,
                'county' => 'Napa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3012,
                'state_id' => 5,
                'county' => 'Contra Costa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 3013,
                'state_id' => 5,
                'county' => 'Solano County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 3014,
                'state_id' => 5,
                'county' => 'Marin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 3015,
                'state_id' => 5,
                'county' => 'Sonoma County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3016,
                'state_id' => 5,
                'county' => 'Santa Cruz County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3017,
                'state_id' => 5,
                'county' => 'San Benito County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3018,
                'state_id' => 5,
                'county' => 'San Joaquin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3019,
                'state_id' => 5,
                'county' => 'Calaveras County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3020,
                'state_id' => 5,
                'county' => 'Stanislaus County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3021,
                'state_id' => 5,
                'county' => 'Tuolumne County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3022,
                'state_id' => 5,
                'county' => 'Mendocino County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 3023,
                'state_id' => 5,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 3024,
                'state_id' => 5,
                'county' => 'Humboldt County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 3025,
                'state_id' => 5,
                'county' => 'Trinity County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 3026,
                'state_id' => 5,
                'county' => 'Del Norte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 3027,
                'state_id' => 5,
                'county' => 'Siskiyou County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 3028,
                'state_id' => 5,
                'county' => 'Amador County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 3029,
                'state_id' => 5,
                'county' => 'Placer County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 3030,
                'state_id' => 5,
                'county' => 'Yolo County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 3031,
                'state_id' => 5,
                'county' => 'El Dorado County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 3032,
                'state_id' => 5,
                'county' => 'Sutter County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 3033,
                'state_id' => 5,
                'county' => 'Yuba County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 3034,
                'state_id' => 5,
                'county' => 'Nevada County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 3035,
                'state_id' => 5,
                'county' => 'Sierra County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 3036,
                'state_id' => 5,
                'county' => 'Colusa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 3037,
                'state_id' => 5,
                'county' => 'Glenn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 3038,
                'state_id' => 5,
                'county' => 'Butte County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 3039,
                'state_id' => 5,
                'county' => 'Plumas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 3040,
                'state_id' => 5,
                'county' => 'Shasta County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 3041,
                'state_id' => 5,
                'county' => 'Modoc County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 3042,
                'state_id' => 5,
                'county' => 'Lassen County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 3043,
                'state_id' => 5,
                'county' => 'Tehama County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 3044,
                'state_id' => 5,
                'county' => 'Alpine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 3045,
                'state_id' => 11,
                'county' => 'Honolulu County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 3046,
                'state_id' => 11,
                'county' => 'Kauai County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 3047,
                'state_id' => 11,
                'county' => 'Hawaii County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 3048,
                'state_id' => 11,
                'county' => 'Maui County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 3049,
                'state_id' => 11,
                'county' => 'Kalawao County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 3050,
                'state_id' => 37,
                'county' => 'Wasco County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 3051,
                'state_id' => 37,
                'county' => 'Marion County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 3052,
                'state_id' => 37,
                'county' => 'Clackamas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 3053,
                'state_id' => 37,
                'county' => 'Washington County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 3054,
                'state_id' => 37,
                'county' => 'Multnomah County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 3055,
                'state_id' => 37,
                'county' => 'Hood River County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 3056,
                'state_id' => 37,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 3057,
                'state_id' => 37,
                'county' => 'Sherman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 3058,
                'state_id' => 37,
                'county' => 'Yamhill County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 3059,
                'state_id' => 37,
                'county' => 'Clatsop County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 3060,
                'state_id' => 37,
                'county' => 'Tillamook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 3061,
                'state_id' => 37,
                'county' => 'Polk County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 3062,
                'state_id' => 37,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 3063,
                'state_id' => 37,
                'county' => 'Linn County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 3064,
                'state_id' => 37,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 3065,
                'state_id' => 37,
                'county' => 'Lane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 3066,
                'state_id' => 37,
                'county' => 'Curry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 3067,
                'state_id' => 37,
                'county' => 'Coos County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 3068,
                'state_id' => 37,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 3069,
                'state_id' => 37,
                'county' => 'Klamath County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 3070,
                'state_id' => 37,
                'county' => 'Josephine County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 3071,
                'state_id' => 37,
                'county' => 'Jackson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 3072,
                'state_id' => 37,
                'county' => 'Lake County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 3073,
                'state_id' => 37,
                'county' => 'Deschutes County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 3074,
                'state_id' => 37,
                'county' => 'Harney County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 3075,
                'state_id' => 37,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 3076,
                'state_id' => 37,
                'county' => 'Wheeler County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 3077,
                'state_id' => 37,
                'county' => 'Crook County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 3078,
                'state_id' => 37,
                'county' => 'Umatilla County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 3079,
                'state_id' => 37,
                'county' => 'Gilliam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 3080,
                'state_id' => 37,
                'county' => 'Baker County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 3081,
                'state_id' => 37,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 3082,
                'state_id' => 37,
                'county' => 'Morrow County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 3083,
                'state_id' => 37,
                'county' => 'Union County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 3084,
                'state_id' => 37,
                'county' => 'Wallowa County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 3085,
                'state_id' => 37,
                'county' => 'Malheur County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 3086,
                'state_id' => 47,
                'county' => 'King County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 3087,
                'state_id' => 47,
                'county' => 'Snohomish County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 3088,
                'state_id' => 47,
                'county' => 'Kitsap County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 3089,
                'state_id' => 47,
                'county' => 'Kittitas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 3090,
                'state_id' => 47,
                'county' => 'Whatcom County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 3091,
                'state_id' => 47,
                'county' => 'Skagit County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 3092,
                'state_id' => 47,
                'county' => 'San Juan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 3093,
                'state_id' => 47,
                'county' => 'Island County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 3094,
                'state_id' => 47,
                'county' => 'Pierce County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 3095,
                'state_id' => 47,
                'county' => 'Clallam County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 3096,
                'state_id' => 47,
                'county' => 'Jefferson County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 3097,
                'state_id' => 47,
                'county' => 'Lewis County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 3098,
                'state_id' => 47,
                'county' => 'Thurston County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 3099,
                'state_id' => 47,
                'county' => 'Grays Harbor County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 3100,
                'state_id' => 47,
                'county' => 'Mason County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 3101,
                'state_id' => 47,
                'county' => 'Pacific County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 3102,
                'state_id' => 47,
                'county' => 'Cowlitz County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 3103,
                'state_id' => 47,
                'county' => 'Clark County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 3104,
                'state_id' => 47,
                'county' => 'Klickitat County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 3105,
                'state_id' => 47,
                'county' => 'Skamania County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 3106,
                'state_id' => 47,
                'county' => 'Wahkiakum County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 3107,
                'state_id' => 47,
                'county' => 'Chelan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 3108,
                'state_id' => 47,
                'county' => 'Douglas County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 3109,
                'state_id' => 47,
                'county' => 'Okanogan County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 3110,
                'state_id' => 47,
                'county' => 'Grant County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 3111,
                'state_id' => 47,
                'county' => 'Yakima County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 3112,
                'state_id' => 47,
                'county' => 'Spokane County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 3113,
                'state_id' => 47,
                'county' => 'Lincoln County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 3114,
                'state_id' => 47,
                'county' => 'Stevens County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 3115,
                'state_id' => 47,
                'county' => 'Whitman County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 3116,
                'state_id' => 47,
                'county' => 'Adams County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 3117,
                'state_id' => 47,
                'county' => 'Ferry County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 3118,
                'state_id' => 47,
                'county' => 'Pend Oreille County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 3119,
                'state_id' => 47,
                'county' => 'Franklin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 3120,
                'state_id' => 47,
                'county' => 'Benton County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 3121,
                'state_id' => 47,
                'county' => 'Walla Walla County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 3122,
                'state_id' => 47,
                'county' => 'Columbia County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 3123,
                'state_id' => 47,
                'county' => 'Garfield County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 3124,
                'state_id' => 47,
                'county' => 'Asotin County',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 3125,
                'state_id' => 2,
                'county' => 'Anchorage Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 3126,
                'state_id' => 2,
                'county' => 'Municipality of Anchorage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 3127,
                'state_id' => 2,
                'county' => 'Bethel Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 3128,
                'state_id' => 2,
                'county' => 'Aleutians West Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 3129,
                'state_id' => 2,
                'county' => 'Lake and Peninsula Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 3130,
                'state_id' => 2,
                'county' => 'Kodiak Island Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 3131,
                'state_id' => 2,
                'county' => 'Aleutians East Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 3132,
                'state_id' => 2,
                'county' => 'Wade Hampton Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 3133,
                'state_id' => 2,
                'county' => 'Dillingham Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 3134,
                'state_id' => 2,
                'county' => 'Kenai Peninsula Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 3135,
                'state_id' => 2,
                'county' => 'Yukon-Koyukuk Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 3136,
                'state_id' => 2,
                'county' => 'Valdez-Cordova Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 3137,
                'state_id' => 2,
                'county' => 'Bristol Bay Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 3138,
                'state_id' => 2,
                'county' => 'Matanuska-Susitna Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 3139,
                'state_id' => 2,
                'county' => 'Nome Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 3140,
                'state_id' => 2,
                'county' => 'Yakutat Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 3141,
                'state_id' => 2,
                'county' => 'Fairbanks North Star Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 3142,
                'state_id' => 2,
                'county' => 'North Slope Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 3143,
                'state_id' => 2,
                'county' => 'Northwest Arctic Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 3144,
                'state_id' => 2,
                'county' => 'Denali Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 3145,
                'state_id' => 2,
                'county' => 'Southeast Fairbanks Census Area',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 3146,
                'state_id' => 2,
                'county' => 'Juneau Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 3147,
                'state_id' => 2,
                'county' => 'City and Borough of Juneau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 3148,
                'state_id' => 2,
                'county' => 'Hoonah-Angoon Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 3149,
                'state_id' => 2,
                'county' => 'Haines Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 3150,
                'state_id' => 2,
                'county' => 'Petersburg Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 3151,
                'state_id' => 2,
                'county' => 'Sitka Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 3152,
                'state_id' => 2,
                'county' => 'Skagway Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 3153,
                'state_id' => 2,
                'county' => 'Ketchikan Gateway Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 3154,
                'state_id' => 2,
                'county' => 'Prince of Wales-Outer Ketchikan Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 3155,
                'state_id' => 2,
                'county' => 'Wrangell Borough',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}