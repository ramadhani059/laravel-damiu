<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Firham059',
                'password' => bcrypt('hamham'),
                'user_category' => 1,
            ],[
                'username' => 'Rhea059',
                'password' => bcrypt('11111111'),
                'user_category' => 2,
            ],[
                'username' => 'Ramadhani059',
                'password' => bcrypt('12345678'),
                'user_category' => 3,
            ],[
                'username' => 'Andhika059',
                'password' => bcrypt('12121212'),
                'user_category' => 4,
            ],
        ]);
    }
}
