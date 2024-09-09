<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {

        DB::table('types')->delete();

        DB::table('types')->insert([
            0 => [
                'id' => 1,
                'type' => 'MILITARY',
            ],
            1 => [
                'id' => 2,
                'type' => 'PO BOX',
            ],
            2 => [
                'id' => 3,
                'type' => 'STANDARD',
            ],
            3 => [
                'id' => 4,
                'type' => 'UNIQUE',
            ],
        ]);

    }
}
