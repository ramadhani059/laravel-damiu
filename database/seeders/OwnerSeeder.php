<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'username' => 'Ramadhani059',
                'depo_id' => 1,
                'owner_name' => 'Pratama Ramadhani Wijaya',
                'owner_address' => 'Jl Wagir Baru II No.F4 Kwangsan Sedati Sidoarjo',
                'owner_city' => 'Sidoarjo',
                'owner_province' => 'Jawa Timur',
                'owner_phone' => '085815554360',
                'owner_email' => 'pratamaramadhani059@gmail.com',
                'owner_image_original' => 'foto',
                'owner_image_encrypted' => 'foto',
            ],
        ]);
    }
}
