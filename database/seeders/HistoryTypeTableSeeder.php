<?php

namespace Database\Seeders;

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class HistoryTypeTableSeeder.
 */
class HistoryTypeTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncateMultiple(['history_types', 'history']);

        $types = [
            [
                'name' => 'User',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Role',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('history_types')->insert($types);

        $this->enableForeignKeys();
    }
}
