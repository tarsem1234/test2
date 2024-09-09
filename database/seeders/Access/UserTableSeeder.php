<?php

namespace Database\Seeders\Access;

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
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
        $this->truncateMultiple([config('access.users_table'), 'social_logins']);

        //Add the master administrator, user id of 1
        $users = [
            [
                'first_name' => 'Administrator',
                'last_name' => null,
                'email' => 'admin@freezylist.com',
                'password' => Hash::make('secret@admin'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Buisness',
                'last_name' => 'User',
                'email' => 'buisness@freezylist.com',
                'password' => Hash::make('123456'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Default',
                'last_name' => 'User',
                'email' => 'user@freezylist.com',
                'password' => Hash::make('123456'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table(config('access.users_table'))->insert($users);

        $this->enableForeignKeys();
    }
}
