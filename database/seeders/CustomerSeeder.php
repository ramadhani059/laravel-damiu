<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'username' => 'Andhika059',
                'customer_name' => 'Andhika Juliawan',
                'customer_address' => 'Jl Ngagel Surabaya',
                'customer_city' => 'Surabaya',
                'customer_province' => 'Jawa Timur',
                'customer_phone' => '085606947549',
                'customer_email' => 'andhikajuliawan@gmail.com',
                'customer_location' => 'Jl Ngagel Surabaya',
                'customer_image_original' => 'foto',
                'customer_image_encrypted' => 'foto',
            ],
        ]);
    }
}
