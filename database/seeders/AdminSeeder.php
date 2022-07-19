<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' => 'Firham059',
                'admin_name' => 'Firdaus Ilham Dharmawan',
                'admin_number' => '1204190003',
                'admin_phone' => '081334594880',
                'admin_email' => 'firham@gmail.com',
                'admin_image_original' => 'foto',
                'admin_image_encrypted' => 'foto',
            ],
        ]);
    }
}
