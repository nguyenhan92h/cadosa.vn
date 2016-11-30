<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seed.
	 *
	 * @return void
	 */
	public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::table('users')->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . 'users');
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE ' . 'users' . ' CASCADE');
        }

        //Add the master administrator, user id of 1
        $users = [
            [
                'name'              => 'Admin Istrator',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('1234'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Backend User',
                'email'             => 'executive@executive.com',
                'password'          => bcrypt('1234'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Default User',
                'email'             => 'user@user.com',
                'password'          => bcrypt('1234'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}