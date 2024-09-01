<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => 'Aruba',
                'iso_cc' => 'AW',
                'subregion_id' => 1,
                'city_code' => 'AA',
            ),
            1 => 
            array (
                'id' => 2,
                'country' => 'Antigua and Barbuda',
                'iso_cc' => 'AG',
                'subregion_id' => 1,
                'city_code' => 'AC',
            ),
            2 => 
            array (
                'id' => 3,
                'country' => 'United Arab Emirates',
                'iso_cc' => 'AE',
                'subregion_id' => 2,
                'city_code' => 'AE',
            ),
            3 => 
            array (
                'id' => 4,
                'country' => 'Afghanistan',
                'iso_cc' => 'AF',
                'subregion_id' => 2,
                'city_code' => 'AF',
            ),
            4 => 
            array (
                'id' => 5,
                'country' => 'Algeria',
                'iso_cc' => 'DZ',
                'subregion_id' => 3,
                'city_code' => 'AG',
            ),
            5 => 
            array (
                'id' => 6,
                'country' => 'Azerbaijan',
                'iso_cc' => 'AZ',
                'subregion_id' => 2,
                'city_code' => 'AJ',
            ),
            6 => 
            array (
                'id' => 7,
                'country' => 'Albania',
                'iso_cc' => 'AL',
                'subregion_id' => 4,
                'city_code' => 'AL',
            ),
            7 => 
            array (
                'id' => 8,
                'country' => 'Armenia',
                'iso_cc' => 'AM',
                'subregion_id' => 2,
                'city_code' => 'AM',
            ),
            8 => 
            array (
                'id' => 9,
                'country' => 'Andorra',
                'iso_cc' => 'AD',
                'subregion_id' => 4,
                'city_code' => 'AN',
            ),
            9 => 
            array (
                'id' => 10,
                'country' => 'Angola',
                'iso_cc' => 'AO',
                'subregion_id' => 5,
                'city_code' => 'AO',
            ),
            10 => 
            array (
                'id' => 11,
                'country' => 'American Samoa',
                'iso_cc' => 'AS',
                'subregion_id' => 6,
                'city_code' => 'AQ',
            ),
            11 => 
            array (
                'id' => 12,
                'country' => 'Argentina',
                'iso_cc' => 'AR',
                'subregion_id' => 7,
                'city_code' => 'AR',
            ),
            12 => 
            array (
                'id' => 13,
                'country' => 'Australia',
                'iso_cc' => 'AU',
                'subregion_id' => 6,
                'city_code' => 'AS',
            ),
            13 => 
            array (
                'id' => 14,
                'country' => 'Austria',
                'iso_cc' => 'AT',
                'subregion_id' => 4,
                'city_code' => 'AU',
            ),
            14 => 
            array (
                'id' => 15,
                'country' => 'Anguilla',
                'iso_cc' => 'AI',
                'subregion_id' => 1,
                'city_code' => 'AV',
            ),
            15 => 
            array (
                'id' => 16,
                'country' => 'Antarctica',
                'iso_cc' => 'AQ',
                'subregion_id' => 8,
                'city_code' => 'AY',
            ),
            16 => 
            array (
                'id' => 17,
                'country' => 'Bahrain',
                'iso_cc' => 'BH',
                'subregion_id' => 2,
                'city_code' => 'BA',
            ),
            17 => 
            array (
                'id' => 18,
                'country' => 'Barbados',
                'iso_cc' => 'BB',
                'subregion_id' => 1,
                'city_code' => 'BB',
            ),
            18 => 
            array (
                'id' => 19,
                'country' => 'Botswana',
                'iso_cc' => 'BW',
                'subregion_id' => 5,
                'city_code' => 'BC',
            ),
            19 => 
            array (
                'id' => 20,
                'country' => 'Bermuda',
                'iso_cc' => 'BM',
                'subregion_id' => 1,
                'city_code' => 'BD',
            ),
            20 => 
            array (
                'id' => 21,
                'country' => 'Belgium',
                'iso_cc' => 'BE',
                'subregion_id' => 4,
                'city_code' => 'BE',
            ),
            21 => 
            array (
                'id' => 22,
                'country' => 'Bahamas',
                'iso_cc' => 'BS',
                'subregion_id' => 1,
                'city_code' => 'BF',
            ),
            22 => 
            array (
                'id' => 23,
                'country' => 'Bangladesh',
                'iso_cc' => 'BD',
                'subregion_id' => 9,
                'city_code' => 'BG',
            ),
            23 => 
            array (
                'id' => 24,
                'country' => 'Belize',
                'iso_cc' => 'BZ',
                'subregion_id' => 10,
                'city_code' => 'BH',
            ),
            24 => 
            array (
                'id' => 25,
                'country' => 'Bosnia and Herzegovina',
                'iso_cc' => 'BA',
                'subregion_id' => 4,
                'city_code' => 'BK',
            ),
            25 => 
            array (
                'id' => 26,
                'country' => 'Bolivia',
                'iso_cc' => 'BO',
                'subregion_id' => 7,
                'city_code' => 'BL',
            ),
            26 => 
            array (
                'id' => 27,
                'country' => 'Myanmar',
                'iso_cc' => 'MM',
                'subregion_id' => 9,
                'city_code' => 'BM',
            ),
            27 => 
            array (
                'id' => 28,
                'country' => 'Benin',
                'iso_cc' => 'BJ',
                'subregion_id' => 5,
                'city_code' => 'BN',
            ),
            28 => 
            array (
                'id' => 29,
                'country' => 'Belarus',
                'iso_cc' => 'BY',
                'subregion_id' => 11,
                'city_code' => 'BO',
            ),
            29 => 
            array (
                'id' => 30,
                'country' => 'Solomon Islands',
                'iso_cc' => 'SB',
                'subregion_id' => 6,
                'city_code' => 'BP',
            ),
            30 => 
            array (
                'id' => 31,
                'country' => 'Brazil',
                'iso_cc' => 'BR',
                'subregion_id' => 7,
                'city_code' => 'BR',
            ),
            31 => 
            array (
                'id' => 32,
                'country' => 'Bhutan',
                'iso_cc' => 'BT',
                'subregion_id' => 9,
                'city_code' => 'BT',
            ),
            32 => 
            array (
                'id' => 33,
                'country' => 'Bulgaria',
                'iso_cc' => 'BG',
                'subregion_id' => 4,
                'city_code' => 'BU',
            ),
            33 => 
            array (
                'id' => 34,
                'country' => 'Bouvet Island',
                'iso_cc' => 'BV',
                'subregion_id' => 8,
                'city_code' => 'BV',
            ),
            34 => 
            array (
                'id' => 35,
                'country' => 'Brunei',
                'iso_cc' => 'BN',
                'subregion_id' => 9,
                'city_code' => 'BX',
            ),
            35 => 
            array (
                'id' => 36,
                'country' => 'Burundi',
                'iso_cc' => 'BI',
                'subregion_id' => 5,
                'city_code' => 'BY',
            ),
            36 => 
            array (
                'id' => 37,
                'country' => 'Canada',
                'iso_cc' => 'CA',
                'subregion_id' => 12,
                'city_code' => 'CA',
            ),
            37 => 
            array (
                'id' => 38,
                'country' => 'Cambodia',
                'iso_cc' => 'KH',
                'subregion_id' => 9,
                'city_code' => 'CB',
            ),
            38 => 
            array (
                'id' => 39,
                'country' => 'Chad',
                'iso_cc' => 'TD',
                'subregion_id' => 5,
                'city_code' => 'CD',
            ),
            39 => 
            array (
                'id' => 40,
                'country' => 'Sri Lanka',
                'iso_cc' => 'LK',
                'subregion_id' => 9,
                'city_code' => 'CE',
            ),
            40 => 
            array (
                'id' => 41,
                'country' => 'Republic of the Congo',
                'iso_cc' => 'CG',
                'subregion_id' => 5,
                'city_code' => 'CF',
            ),
            41 => 
            array (
                'id' => 42,
                'country' => 'Democratic Republic of the Congo',
                'iso_cc' => 'CD',
                'subregion_id' => 5,
                'city_code' => 'CG',
            ),
            42 => 
            array (
                'id' => 43,
                'country' => 'China',
                'iso_cc' => 'CN',
                'subregion_id' => 13,
                'city_code' => 'CH',
            ),
            43 => 
            array (
                'id' => 44,
                'country' => 'Chile',
                'iso_cc' => 'CL',
                'subregion_id' => 7,
                'city_code' => 'CI',
            ),
            44 => 
            array (
                'id' => 45,
                'country' => 'Cayman Islands',
                'iso_cc' => 'KY',
                'subregion_id' => 1,
                'city_code' => 'CJ',
            ),
            45 => 
            array (
                'id' => 46,
            'country' => 'Cocos (Keeling) Islands',
                'iso_cc' => 'CC',
                'subregion_id' => 14,
                'city_code' => 'CK',
            ),
            46 => 
            array (
                'id' => 47,
                'country' => 'Cameroon',
                'iso_cc' => 'CM',
                'subregion_id' => 5,
                'city_code' => 'CM',
            ),
            47 => 
            array (
                'id' => 48,
                'country' => 'Comoros',
                'iso_cc' => 'KM',
                'subregion_id' => 5,
                'city_code' => 'CN',
            ),
            48 => 
            array (
                'id' => 49,
                'country' => 'Colombia',
                'iso_cc' => 'CO',
                'subregion_id' => 7,
                'city_code' => 'CO',
            ),
            49 => 
            array (
                'id' => 50,
                'country' => 'Northern Mariana Islands',
                'iso_cc' => 'MP',
                'subregion_id' => 6,
                'city_code' => 'CQ',
            ),
            50 => 
            array (
                'id' => 51,
                'country' => 'Costa Rica',
                'iso_cc' => 'CR',
                'subregion_id' => 10,
                'city_code' => 'CS',
            ),
            51 => 
            array (
                'id' => 52,
                'country' => 'Central African Republic',
                'iso_cc' => 'CF',
                'subregion_id' => 5,
                'city_code' => 'CT',
            ),
            52 => 
            array (
                'id' => 53,
                'country' => 'Cuba',
                'iso_cc' => 'CU',
                'subregion_id' => 1,
                'city_code' => 'CU',
            ),
            53 => 
            array (
                'id' => 54,
                'country' => 'Cape Verde',
                'iso_cc' => 'CV',
                'subregion_id' => 5,
                'city_code' => 'CV',
            ),
            54 => 
            array (
                'id' => 55,
                'country' => 'Cook Islands',
                'iso_cc' => 'CK',
                'subregion_id' => 6,
                'city_code' => 'CW',
            ),
            55 => 
            array (
                'id' => 56,
                'country' => 'Cyprus',
                'iso_cc' => 'CY',
                'subregion_id' => 2,
                'city_code' => 'CY',
            ),
            56 => 
            array (
                'id' => 57,
                'country' => 'Denmark',
                'iso_cc' => 'DK',
                'subregion_id' => 4,
                'city_code' => 'DA',
            ),
            57 => 
            array (
                'id' => 58,
                'country' => 'Djibouti',
                'iso_cc' => 'DJ',
                'subregion_id' => 5,
                'city_code' => 'DJ',
            ),
            58 => 
            array (
                'id' => 59,
                'country' => 'Dominica',
                'iso_cc' => 'DM',
                'subregion_id' => 1,
                'city_code' => 'DO',
            ),
            59 => 
            array (
                'id' => 60,
                'country' => 'Dominican Republic',
                'iso_cc' => 'DO',
                'subregion_id' => 1,
                'city_code' => 'DR',
            ),
            60 => 
            array (
                'id' => 61,
                'country' => 'Ecuador',
                'iso_cc' => 'EC',
                'subregion_id' => 7,
                'city_code' => 'EC',
            ),
            61 => 
            array (
                'id' => 62,
                'country' => 'Egypt',
                'iso_cc' => 'EG',
                'subregion_id' => 3,
                'city_code' => 'EG',
            ),
            62 => 
            array (
                'id' => 63,
                'country' => 'Ireland',
                'iso_cc' => 'IE',
                'subregion_id' => 4,
                'city_code' => 'EI',
            ),
            63 => 
            array (
                'id' => 64,
                'country' => 'Equatorial Guinea',
                'iso_cc' => 'GQ',
                'subregion_id' => 5,
                'city_code' => 'EK',
            ),
            64 => 
            array (
                'id' => 65,
                'country' => 'Estonia',
                'iso_cc' => 'EE',
                'subregion_id' => 4,
                'city_code' => 'EN',
            ),
            65 => 
            array (
                'id' => 66,
                'country' => 'Eritrea',
                'iso_cc' => 'ER',
                'subregion_id' => 5,
                'city_code' => 'ER',
            ),
            66 => 
            array (
                'id' => 67,
                'country' => 'El Salvador',
                'iso_cc' => 'SV',
                'subregion_id' => 10,
                'city_code' => 'ES',
            ),
            67 => 
            array (
                'id' => 68,
                'country' => 'Ethiopia',
                'iso_cc' => 'ET',
                'subregion_id' => 5,
                'city_code' => 'ET',
            ),
            68 => 
            array (
                'id' => 69,
                'country' => 'Czech Republic',
                'iso_cc' => 'CZ',
                'subregion_id' => 4,
                'city_code' => 'EZ',
            ),
            69 => 
            array (
                'id' => 70,
                'country' => 'French Guiana',
                'iso_cc' => 'GF',
                'subregion_id' => 7,
                'city_code' => 'FG',
            ),
            70 => 
            array (
                'id' => 71,
                'country' => 'Finland',
                'iso_cc' => 'FI',
                'subregion_id' => 4,
                'city_code' => 'FI',
            ),
            71 => 
            array (
                'id' => 72,
                'country' => 'Fiji',
                'iso_cc' => 'FJ',
                'subregion_id' => 6,
                'city_code' => 'FJ',
            ),
            72 => 
            array (
                'id' => 73,
            'country' => 'Falkland Islands (Islas Malvinas)',
                'iso_cc' => 'FK',
                'subregion_id' => 7,
                'city_code' => 'FK',
            ),
            73 => 
            array (
                'id' => 74,
                'country' => 'Micronesia, Federated States of',
                'iso_cc' => 'FM',
                'subregion_id' => 6,
                'city_code' => 'FM',
            ),
            74 => 
            array (
                'id' => 75,
                'country' => 'Faroe Islands',
                'iso_cc' => 'FO',
                'subregion_id' => 4,
                'city_code' => 'FO',
            ),
            75 => 
            array (
                'id' => 76,
                'country' => 'French Polynesia',
                'iso_cc' => 'PF',
                'subregion_id' => 6,
                'city_code' => 'FP',
            ),
            76 => 
            array (
                'id' => 77,
                'country' => 'France',
                'iso_cc' => 'FR',
                'subregion_id' => 4,
                'city_code' => 'FR',
            ),
            77 => 
            array (
                'id' => 78,
                'country' => 'Gambia',
                'iso_cc' => 'GM',
                'subregion_id' => 5,
                'city_code' => 'GA',
            ),
            78 => 
            array (
                'id' => 79,
                'country' => 'Gabon',
                'iso_cc' => 'GA',
                'subregion_id' => 5,
                'city_code' => 'GB',
            ),
            79 => 
            array (
                'id' => 80,
                'country' => 'Georgia',
                'iso_cc' => 'GE',
                'subregion_id' => 2,
                'city_code' => 'GG',
            ),
            80 => 
            array (
                'id' => 81,
                'country' => 'Ghana',
                'iso_cc' => 'GH',
                'subregion_id' => 5,
                'city_code' => 'GH',
            ),
            81 => 
            array (
                'id' => 82,
                'country' => 'Gibraltar',
                'iso_cc' => 'GI',
                'subregion_id' => 4,
                'city_code' => 'GI',
            ),
            82 => 
            array (
                'id' => 83,
                'country' => 'Grenada',
                'iso_cc' => 'GD',
                'subregion_id' => 1,
                'city_code' => 'GJ',
            ),
            83 => 
            array (
                'id' => 84,
                'country' => 'Guernsey',
                'iso_cc' => 'GG',
                'subregion_id' => 4,
                'city_code' => 'GK',
            ),
            84 => 
            array (
                'id' => 85,
                'country' => 'Greenland',
                'iso_cc' => 'GL',
                'subregion_id' => 15,
                'city_code' => 'GL',
            ),
            85 => 
            array (
                'id' => 86,
                'country' => 'Germany',
                'iso_cc' => 'DE',
                'subregion_id' => 4,
                'city_code' => 'GM',
            ),
            86 => 
            array (
                'id' => 87,
                'country' => 'Guadeloupe',
                'iso_cc' => 'GP',
                'subregion_id' => 1,
                'city_code' => 'GP',
            ),
            87 => 
            array (
                'id' => 88,
                'country' => 'Guam',
                'iso_cc' => 'GU',
                'subregion_id' => 6,
                'city_code' => 'GQ',
            ),
            88 => 
            array (
                'id' => 89,
                'country' => 'Greece',
                'iso_cc' => 'GR',
                'subregion_id' => 4,
                'city_code' => 'GR',
            ),
            89 => 
            array (
                'id' => 90,
                'country' => 'Guatemala',
                'iso_cc' => 'GT',
                'subregion_id' => 10,
                'city_code' => 'GT',
            ),
            90 => 
            array (
                'id' => 91,
                'country' => 'Guinea',
                'iso_cc' => 'GN',
                'subregion_id' => 5,
                'city_code' => 'GV',
            ),
            91 => 
            array (
                'id' => 92,
                'country' => 'Guyana',
                'iso_cc' => 'GY',
                'subregion_id' => 7,
                'city_code' => 'GY',
            ),
            92 => 
            array (
                'id' => 93,
                'country' => 'Haiti',
                'iso_cc' => 'HT',
                'subregion_id' => 1,
                'city_code' => 'HA',
            ),
            93 => 
            array (
                'id' => 94,
                'country' => 'Hong Kong',
                'iso_cc' => 'HK',
                'subregion_id' => 13,
                'city_code' => 'HK',
            ),
            94 => 
            array (
                'id' => 95,
                'country' => 'Heard Island and McDonald Islands',
                'iso_cc' => 'HM',
                'subregion_id' => 8,
                'city_code' => 'HM',
            ),
            95 => 
            array (
                'id' => 96,
                'country' => 'Honduras',
                'iso_cc' => 'HN',
                'subregion_id' => 10,
                'city_code' => 'HO',
            ),
            96 => 
            array (
                'id' => 97,
                'country' => 'Croatia',
                'iso_cc' => 'HR',
                'subregion_id' => 4,
                'city_code' => 'HR',
            ),
            97 => 
            array (
                'id' => 98,
                'country' => 'Hungary',
                'iso_cc' => 'HU',
                'subregion_id' => 4,
                'city_code' => 'HU',
            ),
            98 => 
            array (
                'id' => 99,
                'country' => 'Iceland',
                'iso_cc' => 'IS',
                'subregion_id' => 4,
                'city_code' => 'IC',
            ),
            99 => 
            array (
                'id' => 100,
                'country' => 'Indonesia',
                'iso_cc' => 'ID',
                'subregion_id' => 9,
                'city_code' => 'ID',
            ),
            100 => 
            array (
                'id' => 101,
                'country' => 'Isle of Man',
                'iso_cc' => 'IM',
                'subregion_id' => 4,
                'city_code' => 'IM',
            ),
            101 => 
            array (
                'id' => 102,
                'country' => 'India',
                'iso_cc' => 'IN',
                'subregion_id' => 9,
                'city_code' => 'IN',
            ),
            102 => 
            array (
                'id' => 103,
                'country' => 'British Indian Ocean Territory',
                'iso_cc' => 'IO',
                'subregion_id' => 9,
                'city_code' => 'IO',
            ),
            103 => 
            array (
                'id' => 104,
                'country' => 'Iran',
                'iso_cc' => 'IR',
                'subregion_id' => 2,
                'city_code' => 'IR',
            ),
            104 => 
            array (
                'id' => 105,
                'country' => 'Israel',
                'iso_cc' => 'IL',
                'subregion_id' => 2,
                'city_code' => 'IS',
            ),
            105 => 
            array (
                'id' => 106,
                'country' => 'Italy',
                'iso_cc' => 'IT',
                'subregion_id' => 4,
                'city_code' => 'IT',
            ),
            106 => 
            array (
                'id' => 107,
                'country' => 'Cote d`Ivoire',
                'iso_cc' => 'CI',
                'subregion_id' => 5,
                'city_code' => 'IV
',
            ),
            107 => 
            array (
                'id' => 108,
                'country' => 'Iraq',
                'iso_cc' => 'IQ',
                'subregion_id' => 2,
                'city_code' => 'IZ',
            ),
            108 => 
            array (
                'id' => 109,
                'country' => 'Japan',
                'iso_cc' => 'JP',
                'subregion_id' => 13,
                'city_code' => 'JA',
            ),
            109 => 
            array (
                'id' => 110,
                'country' => 'Jersey',
                'iso_cc' => 'JE',
                'subregion_id' => 4,
                'city_code' => 'JE',
            ),
            110 => 
            array (
                'id' => 111,
                'country' => 'Jamaica',
                'iso_cc' => 'JM',
                'subregion_id' => 1,
                'city_code' => 'JM',
            ),
            111 => 
            array (
                'id' => 112,
                'country' => 'Jan Mayen',
                'iso_cc' => 'SJ',
                'subregion_id' => 4,
                'city_code' => 'JN',
            ),
            112 => 
            array (
                'id' => 113,
                'country' => 'Jordan',
                'iso_cc' => 'JO',
                'subregion_id' => 2,
                'city_code' => 'JO',
            ),
            113 => 
            array (
                'id' => 114,
                'country' => 'Kenya',
                'iso_cc' => 'KE',
                'subregion_id' => 5,
                'city_code' => 'KE',
            ),
            114 => 
            array (
                'id' => 115,
                'country' => 'Kyrgyzstan',
                'iso_cc' => 'KG',
                'subregion_id' => 2,
                'city_code' => 'KG',
            ),
            115 => 
            array (
                'id' => 116,
                'country' => 'North Korea',
                'iso_cc' => 'KP',
                'subregion_id' => 13,
                'city_code' => 'KN',
            ),
            116 => 
            array (
                'id' => 117,
                'country' => 'Kiribati',
                'iso_cc' => 'KI',
                'subregion_id' => 6,
                'city_code' => 'KR',
            ),
            117 => 
            array (
                'id' => 118,
                'country' => 'South Korea',
                'iso_cc' => 'KR',
                'subregion_id' => 13,
                'city_code' => 'KS',
            ),
            118 => 
            array (
                'id' => 119,
                'country' => 'Christmas Island',
                'iso_cc' => 'CX',
                'subregion_id' => 14,
                'city_code' => 'KT',
            ),
            119 => 
            array (
                'id' => 120,
                'country' => 'Kuwait',
                'iso_cc' => 'KW',
                'subregion_id' => 2,
                'city_code' => 'KU',
            ),
            120 => 
            array (
                'id' => 121,
                'country' => 'Kazakhstan',
                'iso_cc' => 'KZ',
                'subregion_id' => 2,
                'city_code' => 'KZ',
            ),
            121 => 
            array (
                'id' => 122,
                'country' => 'Laos',
                'iso_cc' => 'LA',
                'subregion_id' => 9,
                'city_code' => 'LA',
            ),
            122 => 
            array (
                'id' => 123,
                'country' => 'Lebanon',
                'iso_cc' => 'LB',
                'subregion_id' => 2,
                'city_code' => 'LE',
            ),
            123 => 
            array (
                'id' => 124,
                'country' => 'Latvia',
                'iso_cc' => 'LV',
                'subregion_id' => 4,
                'city_code' => 'LG',
            ),
            124 => 
            array (
                'id' => 125,
                'country' => 'Lithuania',
                'iso_cc' => 'LT',
                'subregion_id' => 4,
                'city_code' => 'LH',
            ),
            125 => 
            array (
                'id' => 126,
                'country' => 'Liberia',
                'iso_cc' => 'LR',
                'subregion_id' => 5,
                'city_code' => 'LI',
            ),
            126 => 
            array (
                'id' => 127,
                'country' => 'Slovakia',
                'iso_cc' => 'SK',
                'subregion_id' => 4,
                'city_code' => 'LO',
            ),
            127 => 
            array (
                'id' => 128,
                'country' => 'Liechtenstein',
                'iso_cc' => 'LI',
                'subregion_id' => 4,
                'city_code' => 'LS',
            ),
            128 => 
            array (
                'id' => 129,
                'country' => 'Lesotho',
                'iso_cc' => 'LS',
                'subregion_id' => 5,
                'city_code' => 'LT',
            ),
            129 => 
            array (
                'id' => 130,
                'country' => 'Luxembourg',
                'iso_cc' => 'LU',
                'subregion_id' => 4,
                'city_code' => 'LU',
            ),
            130 => 
            array (
                'id' => 131,
                'country' => 'Libya',
                'iso_cc' => 'LY',
                'subregion_id' => 3,
                'city_code' => 'LY',
            ),
            131 => 
            array (
                'id' => 132,
                'country' => 'Madagascar',
                'iso_cc' => 'MG',
                'subregion_id' => 5,
                'city_code' => 'MA',
            ),
            132 => 
            array (
                'id' => 133,
                'country' => 'Martinique',
                'iso_cc' => 'MQ',
                'subregion_id' => 1,
                'city_code' => 'MB',
            ),
            133 => 
            array (
                'id' => 134,
                'country' => 'Macau',
                'iso_cc' => 'MO',
                'subregion_id' => 13,
                'city_code' => 'MC',
            ),
            134 => 
            array (
                'id' => 135,
                'country' => 'Moldova',
                'iso_cc' => 'MD',
                'subregion_id' => 11,
                'city_code' => 'MD',
            ),
            135 => 
            array (
                'id' => 136,
                'country' => 'Mayotte',
                'iso_cc' => 'YT',
                'subregion_id' => 5,
                'city_code' => 'MF',
            ),
            136 => 
            array (
                'id' => 137,
                'country' => 'Mongolia',
                'iso_cc' => 'MN',
                'subregion_id' => 13,
                'city_code' => 'MG',
            ),
            137 => 
            array (
                'id' => 138,
                'country' => 'Montserrat',
                'iso_cc' => 'MS',
                'subregion_id' => 1,
                'city_code' => 'MH',
            ),
            138 => 
            array (
                'id' => 139,
                'country' => 'Malawi',
                'iso_cc' => 'MW',
                'subregion_id' => 5,
                'city_code' => 'MI',
            ),
            139 => 
            array (
                'id' => 140,
                'country' => 'Montenegro',
                'iso_cc' => 'ME',
                'subregion_id' => 4,
                'city_code' => 'MJ',
            ),
            140 => 
            array (
                'id' => 141,
                'country' => 'The Former Yugoslav Republic of Macedonia',
                'iso_cc' => 'MK',
                'subregion_id' => 4,
                'city_code' => 'MK',
            ),
            141 => 
            array (
                'id' => 142,
                'country' => 'Mali',
                'iso_cc' => 'ML',
                'subregion_id' => 5,
                'city_code' => 'ML',
            ),
            142 => 
            array (
                'id' => 143,
                'country' => 'Monaco',
                'iso_cc' => 'MC',
                'subregion_id' => 4,
                'city_code' => 'MN',
            ),
            143 => 
            array (
                'id' => 144,
                'country' => 'Morocco',
                'iso_cc' => 'MA',
                'subregion_id' => 3,
                'city_code' => 'MO',
            ),
            144 => 
            array (
                'id' => 145,
                'country' => 'Mauritius',
                'iso_cc' => 'MU',
                'subregion_id' => 5,
                'city_code' => 'MP',
            ),
            145 => 
            array (
                'id' => 146,
                'country' => 'Mauritania',
                'iso_cc' => 'MR',
                'subregion_id' => 5,
                'city_code' => 'MR',
            ),
            146 => 
            array (
                'id' => 147,
                'country' => 'Malta',
                'iso_cc' => 'MT',
                'subregion_id' => 4,
                'city_code' => 'MT',
            ),
            147 => 
            array (
                'id' => 148,
                'country' => 'Oman',
                'iso_cc' => 'OM',
                'subregion_id' => 2,
                'city_code' => 'MU',
            ),
            148 => 
            array (
                'id' => 149,
                'country' => 'Maldives',
                'iso_cc' => 'MV',
                'subregion_id' => 9,
                'city_code' => 'MV',
            ),
            149 => 
            array (
                'id' => 150,
                'country' => 'Mexico',
                'iso_cc' => 'MX',
                'subregion_id' => 10,
                'city_code' => 'MX',
            ),
            150 => 
            array (
                'id' => 151,
                'country' => 'Malaysia',
                'iso_cc' => 'MY',
                'subregion_id' => 9,
                'city_code' => 'MY',
            ),
            151 => 
            array (
                'id' => 152,
                'country' => 'Mozambique',
                'iso_cc' => 'MZ',
                'subregion_id' => 5,
                'city_code' => 'MZ',
            ),
            152 => 
            array (
                'id' => 153,
                'country' => 'New Caledonia',
                'iso_cc' => 'NC',
                'subregion_id' => 6,
                'city_code' => 'NC',
            ),
            153 => 
            array (
                'id' => 154,
                'country' => 'Niue',
                'iso_cc' => 'NU',
                'subregion_id' => 6,
                'city_code' => 'NE',
            ),
            154 => 
            array (
                'id' => 155,
                'country' => 'Norfolk Island',
                'iso_cc' => 'NF',
                'subregion_id' => 6,
                'city_code' => 'NF',
            ),
            155 => 
            array (
                'id' => 156,
                'country' => 'Niger',
                'iso_cc' => 'NE',
                'subregion_id' => 5,
                'city_code' => 'NG',
            ),
            156 => 
            array (
                'id' => 157,
                'country' => 'Vanuatu',
                'iso_cc' => 'VU',
                'subregion_id' => 6,
                'city_code' => 'NH',
            ),
            157 => 
            array (
                'id' => 158,
                'country' => 'Nigeria',
                'iso_cc' => 'NG',
                'subregion_id' => 5,
                'city_code' => 'NI',
            ),
            158 => 
            array (
                'id' => 159,
                'country' => 'Netherlands',
                'iso_cc' => 'NL',
                'subregion_id' => 4,
                'city_code' => 'NL',
            ),
            159 => 
            array (
                'id' => 160,
                'country' => 'Saint Maarten',
                'iso_cc' => 'SX',
                'subregion_id' => 1,
                'city_code' => 'NN',
            ),
            160 => 
            array (
                'id' => 161,
                'country' => 'Norway',
                'iso_cc' => 'NO',
                'subregion_id' => 4,
                'city_code' => 'NO',
            ),
            161 => 
            array (
                'id' => 162,
                'country' => 'Nepal',
                'iso_cc' => 'NP',
                'subregion_id' => 9,
                'city_code' => 'NP',
            ),
            162 => 
            array (
                'id' => 163,
                'country' => 'Nauru',
                'iso_cc' => 'NR',
                'subregion_id' => 6,
                'city_code' => 'NR',
            ),
            163 => 
            array (
                'id' => 164,
                'country' => 'Suriname',
                'iso_cc' => 'SR',
                'subregion_id' => 7,
                'city_code' => 'NS',
            ),
            164 => 
            array (
                'id' => 165,
                'country' => 'Nicaragua',
                'iso_cc' => 'NI',
                'subregion_id' => 10,
                'city_code' => 'NU',
            ),
            165 => 
            array (
                'id' => 166,
                'country' => 'New Zealand',
                'iso_cc' => 'NZ',
                'subregion_id' => 6,
                'city_code' => 'NZ',
            ),
            166 => 
            array (
                'id' => 167,
                'country' => 'Paraguay',
                'iso_cc' => 'PY',
                'subregion_id' => 7,
                'city_code' => 'PA',
            ),
            167 => 
            array (
                'id' => 168,
                'country' => 'Pitcairn Islands',
                'iso_cc' => 'PN',
                'subregion_id' => 6,
                'city_code' => 'PC',
            ),
            168 => 
            array (
                'id' => 169,
                'country' => 'Peru',
                'iso_cc' => 'PE',
                'subregion_id' => 7,
                'city_code' => 'PE',
            ),
            169 => 
            array (
                'id' => 170,
                'country' => 'Pakistan',
                'iso_cc' => 'PK',
                'subregion_id' => 2,
                'city_code' => 'PK',
            ),
            170 => 
            array (
                'id' => 171,
                'country' => 'Poland',
                'iso_cc' => 'PL',
                'subregion_id' => 4,
                'city_code' => 'PL',
            ),
            171 => 
            array (
                'id' => 172,
                'country' => 'Panama',
                'iso_cc' => 'PA',
                'subregion_id' => 10,
                'city_code' => 'PM',
            ),
            172 => 
            array (
                'id' => 173,
                'country' => 'Portugal',
                'iso_cc' => 'PT',
                'subregion_id' => 4,
                'city_code' => 'PO',
            ),
            173 => 
            array (
                'id' => 174,
                'country' => 'Papua New Guinea',
                'iso_cc' => 'PG',
                'subregion_id' => 6,
                'city_code' => 'PP',
            ),
            174 => 
            array (
                'id' => 175,
                'country' => 'Palau',
                'iso_cc' => 'PW',
                'subregion_id' => 6,
                'city_code' => 'PS',
            ),
            175 => 
            array (
                'id' => 176,
                'country' => 'Guinea-Bissau',
                'iso_cc' => 'GW',
                'subregion_id' => 5,
                'city_code' => 'PU',
            ),
            176 => 
            array (
                'id' => 177,
                'country' => 'Qatar',
                'iso_cc' => 'QA',
                'subregion_id' => 2,
                'city_code' => 'QA',
            ),
            177 => 
            array (
                'id' => 178,
                'country' => 'Reunion',
                'iso_cc' => 'RE',
                'subregion_id' => 5,
                'city_code' => 'RE',
            ),
            178 => 
            array (
                'id' => 179,
                'country' => 'Serbia',
                'iso_cc' => 'RS',
                'subregion_id' => 4,
                'city_code' => 'RI',
            ),
            179 => 
            array (
                'id' => 180,
                'country' => 'Marshall Islands',
                'iso_cc' => 'MH',
                'subregion_id' => 6,
                'city_code' => 'RM',
            ),
            180 => 
            array (
                'id' => 181,
                'country' => 'Saint Martin',
                'iso_cc' => 'MF',
                'subregion_id' => 1,
                'city_code' => 'RN',
            ),
            181 => 
            array (
                'id' => 182,
                'country' => 'Romania',
                'iso_cc' => 'RO',
                'subregion_id' => 4,
                'city_code' => 'RO',
            ),
            182 => 
            array (
                'id' => 183,
                'country' => 'Philippines',
                'iso_cc' => 'PH',
                'subregion_id' => 9,
                'city_code' => 'RP',
            ),
            183 => 
            array (
                'id' => 184,
                'country' => 'Puerto Rico',
                'iso_cc' => 'PR',
                'subregion_id' => 1,
                'city_code' => 'RQ',
            ),
            184 => 
            array (
                'id' => 185,
                'country' => 'Russia',
                'iso_cc' => 'RU',
                'subregion_id' => 11,
                'city_code' => 'RS',
            ),
            185 => 
            array (
                'id' => 186,
                'country' => 'Rwanda',
                'iso_cc' => 'RW',
                'subregion_id' => 5,
                'city_code' => 'RW',
            ),
            186 => 
            array (
                'id' => 187,
                'country' => 'Saudi Arabia',
                'iso_cc' => 'SA',
                'subregion_id' => 2,
                'city_code' => 'SA',
            ),
            187 => 
            array (
                'id' => 188,
                'country' => 'Saint Pierre and Miquelon',
                'iso_cc' => 'PM',
                'subregion_id' => 12,
                'city_code' => 'SB',
            ),
            188 => 
            array (
                'id' => 189,
                'country' => 'Saint Kitts and Nevis',
                'iso_cc' => 'KN',
                'subregion_id' => 1,
                'city_code' => 'SC',
            ),
            189 => 
            array (
                'id' => 190,
                'country' => 'Seychelles',
                'iso_cc' => 'SC',
                'subregion_id' => 5,
                'city_code' => 'SE',
            ),
            190 => 
            array (
                'id' => 191,
                'country' => 'South Africa',
                'iso_cc' => 'ZA',
                'subregion_id' => 5,
                'city_code' => 'SF',
            ),
            191 => 
            array (
                'id' => 192,
                'country' => 'Senegal',
                'iso_cc' => 'SN',
                'subregion_id' => 5,
                'city_code' => 'SG',
            ),
            192 => 
            array (
                'id' => 193,
                'country' => 'Saint Helena',
                'iso_cc' => 'SH',
                'subregion_id' => 5,
                'city_code' => 'SH',
            ),
            193 => 
            array (
                'id' => 194,
                'country' => 'Slovenia',
                'iso_cc' => 'SI',
                'subregion_id' => 4,
                'city_code' => 'SI',
            ),
            194 => 
            array (
                'id' => 195,
                'country' => 'Sierra Leone',
                'iso_cc' => 'SL',
                'subregion_id' => 5,
                'city_code' => 'SL',
            ),
            195 => 
            array (
                'id' => 196,
                'country' => 'San Marino',
                'iso_cc' => 'SM',
                'subregion_id' => 4,
                'city_code' => 'SM',
            ),
            196 => 
            array (
                'id' => 197,
                'country' => 'Singapore',
                'iso_cc' => 'SG',
                'subregion_id' => 9,
                'city_code' => 'SN',
            ),
            197 => 
            array (
                'id' => 198,
                'country' => 'Somalia',
                'iso_cc' => 'SO',
                'subregion_id' => 5,
                'city_code' => 'SO',
            ),
            198 => 
            array (
                'id' => 199,
                'country' => 'Spain',
                'iso_cc' => 'ES',
                'subregion_id' => 4,
                'city_code' => 'SP',
            ),
            199 => 
            array (
                'id' => 200,
                'country' => 'Saint Lucia',
                'iso_cc' => 'LC',
                'subregion_id' => 1,
                'city_code' => 'ST',
            ),
            200 => 
            array (
                'id' => 201,
                'country' => 'Sudan',
                'iso_cc' => 'SD',
                'subregion_id' => 5,
                'city_code' => 'SU',
            ),
            201 => 
            array (
                'id' => 202,
                'country' => 'Svalbard',
                'iso_cc' => 'SJ',
                'subregion_id' => 4,
                'city_code' => 'SV',
            ),
            202 => 
            array (
                'id' => 203,
                'country' => 'Sweden',
                'iso_cc' => 'SE',
                'subregion_id' => 4,
                'city_code' => 'SW',
            ),
            203 => 
            array (
                'id' => 204,
                'country' => 'South Georgia and the Islands',
                'iso_cc' => 'GS',
                'subregion_id' => 8,
                'city_code' => 'SX',
            ),
            204 => 
            array (
                'id' => 205,
                'country' => 'Syrian Arab Republic',
                'iso_cc' => 'SY',
                'subregion_id' => 2,
                'city_code' => 'SY',
            ),
            205 => 
            array (
                'id' => 206,
                'country' => 'Switzerland',
                'iso_cc' => 'CH',
                'subregion_id' => 4,
                'city_code' => 'SZ',
            ),
            206 => 
            array (
                'id' => 207,
                'country' => 'Saint Barthelemy',
                'iso_cc' => 'BL',
                'subregion_id' => 1,
                'city_code' => 'TB',
            ),
            207 => 
            array (
                'id' => 208,
                'country' => 'Trinidad and Tobago',
                'iso_cc' => 'TT',
                'subregion_id' => 1,
                'city_code' => 'TD',
            ),
            208 => 
            array (
                'id' => 209,
                'country' => 'Thailand',
                'iso_cc' => 'TH',
                'subregion_id' => 9,
                'city_code' => 'TH',
            ),
            209 => 
            array (
                'id' => 210,
                'country' => 'Tajikistan',
                'iso_cc' => 'TJ',
                'subregion_id' => 2,
                'city_code' => 'TI',
            ),
            210 => 
            array (
                'id' => 211,
                'country' => 'Turks and Caicos Islands',
                'iso_cc' => 'TC',
                'subregion_id' => 1,
                'city_code' => 'TK',
            ),
            211 => 
            array (
                'id' => 212,
                'country' => 'Tokelau',
                'iso_cc' => 'TK',
                'subregion_id' => 6,
                'city_code' => 'TL',
            ),
            212 => 
            array (
                'id' => 213,
                'country' => 'Tonga',
                'iso_cc' => 'TO',
                'subregion_id' => 6,
                'city_code' => 'TN',
            ),
            213 => 
            array (
                'id' => 214,
                'country' => 'Togo',
                'iso_cc' => 'TG',
                'subregion_id' => 5,
                'city_code' => 'TO',
            ),
            214 => 
            array (
                'id' => 215,
                'country' => 'Sao Tome and Principe',
                'iso_cc' => 'ST',
                'subregion_id' => 5,
                'city_code' => 'TP',
            ),
            215 => 
            array (
                'id' => 216,
                'country' => 'Tunisia',
                'iso_cc' => 'TN',
                'subregion_id' => 3,
                'city_code' => 'TS',
            ),
            216 => 
            array (
                'id' => 217,
                'country' => 'East Timor',
                'iso_cc' => 'TL',
                'subregion_id' => 9,
                'city_code' => 'TT',
            ),
            217 => 
            array (
                'id' => 218,
                'country' => 'Turkey',
                'iso_cc' => 'TR',
                'subregion_id' => 16,
                'city_code' => 'TU',
            ),
            218 => 
            array (
                'id' => 219,
                'country' => 'Tuvalu',
                'iso_cc' => 'TV',
                'subregion_id' => 6,
                'city_code' => 'TV',
            ),
            219 => 
            array (
                'id' => 220,
                'country' => 'Taiwan',
                'iso_cc' => 'TW',
                'subregion_id' => 13,
                'city_code' => 'TW',
            ),
            220 => 
            array (
                'id' => 221,
                'country' => 'Turkmenistan',
                'iso_cc' => 'TM',
                'subregion_id' => 2,
                'city_code' => 'TX',
            ),
            221 => 
            array (
                'id' => 222,
                'country' => 'Tanzania, United Republic of',
                'iso_cc' => 'TZ',
                'subregion_id' => 5,
                'city_code' => 'TZ',
            ),
            222 => 
            array (
                'id' => 223,
                'country' => 'Curacao',
                'iso_cc' => 'CW',
                'subregion_id' => 1,
                'city_code' => 'UC',
            ),
            223 => 
            array (
                'id' => 224,
                'country' => 'Uganda',
                'iso_cc' => 'UG',
                'subregion_id' => 5,
                'city_code' => 'UG',
            ),
            224 => 
            array (
                'id' => 225,
                'country' => 'United Kingdom',
                'iso_cc' => 'GB',
                'subregion_id' => 4,
                'city_code' => 'UK',
            ),
            225 => 
            array (
                'id' => 226,
                'country' => 'Ukraine',
                'iso_cc' => 'UA',
                'subregion_id' => 11,
                'city_code' => 'UP',
            ),
            226 => 
            array (
                'id' => 227,
                'country' => 'United States',
                'iso_cc' => 'US',
                'subregion_id' => 12,
                'city_code' => 'US',
            ),
            227 => 
            array (
                'id' => 228,
                'country' => 'Burkina Faso',
                'iso_cc' => 'BF',
                'subregion_id' => 5,
                'city_code' => 'UV',
            ),
            228 => 
            array (
                'id' => 229,
                'country' => 'Uruguay',
                'iso_cc' => 'UY',
                'subregion_id' => 7,
                'city_code' => 'UY',
            ),
            229 => 
            array (
                'id' => 230,
                'country' => 'Uzbekistan',
                'iso_cc' => 'UZ',
                'subregion_id' => 2,
                'city_code' => 'UZ',
            ),
            230 => 
            array (
                'id' => 231,
                'country' => 'Saint Vincent and the Grenadines',
                'iso_cc' => 'VC',
                'subregion_id' => 1,
                'city_code' => 'VC',
            ),
            231 => 
            array (
                'id' => 232,
                'country' => 'Venezuela',
                'iso_cc' => 'VE',
                'subregion_id' => 7,
                'city_code' => 'VE',
            ),
            232 => 
            array (
                'id' => 233,
                'country' => 'British Virgin Islands',
                'iso_cc' => 'VG',
                'subregion_id' => 1,
                'city_code' => 'VI',
            ),
            233 => 
            array (
                'id' => 234,
                'country' => 'Vietnam',
                'iso_cc' => 'VN',
                'subregion_id' => 9,
                'city_code' => 'VM',
            ),
            234 => 
            array (
                'id' => 235,
            'country' => 'Virgin Islands (US)',
                'iso_cc' => 'VI',
                'subregion_id' => 1,
                'city_code' => 'VQ',
            ),
            235 => 
            array (
                'id' => 236,
            'country' => 'Holy See (Vatican City)',
                'iso_cc' => 'VA',
                'subregion_id' => 4,
                'city_code' => 'VT',
            ),
            236 => 
            array (
                'id' => 237,
                'country' => 'Namibia',
                'iso_cc' => 'NA',
                'subregion_id' => 5,
                'city_code' => 'WA',
            ),
            237 => 
            array (
                'id' => 238,
                'country' => 'Palestine',
                'iso_cc' => 'PS',
                'subregion_id' => 2,
                'city_code' => 'WE',
            ),
            238 => 
            array (
                'id' => 239,
                'country' => 'Wallis and Futuna',
                'iso_cc' => 'WF',
                'subregion_id' => 6,
                'city_code' => 'WF',
            ),
            239 => 
            array (
                'id' => 240,
                'country' => 'Western Sahara',
                'iso_cc' => 'EH',
                'subregion_id' => 3,
                'city_code' => 'WI',
            ),
            240 => 
            array (
                'id' => 241,
                'country' => 'Samoa',
                'iso_cc' => 'WS',
                'subregion_id' => 6,
                'city_code' => 'WS',
            ),
            241 => 
            array (
                'id' => 242,
                'country' => 'Swaziland',
                'iso_cc' => 'SZ',
                'subregion_id' => 5,
                'city_code' => 'WZ',
            ),
            242 => 
            array (
                'id' => 243,
                'country' => 'Yemen',
                'iso_cc' => 'YE',
                'subregion_id' => 2,
                'city_code' => 'YM',
            ),
            243 => 
            array (
                'id' => 244,
                'country' => 'Zambia',
                'iso_cc' => 'ZM',
                'subregion_id' => 5,
                'city_code' => 'ZA',
            ),
            244 => 
            array (
                'id' => 245,
                'country' => 'Zimbabwe',
                'iso_cc' => 'ZW',
                'subregion_id' => 5,
                'city_code' => 'ZI',
            ),
        ));
        
        
    }
}