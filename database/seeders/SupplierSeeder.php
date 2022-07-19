<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'depo_id' => 1,
                'supplier_name' => 'Muhammad Naufal',
                'supplier_person_name' => 'Naufal',
                'supplier_address' => 'Jl Sukolilo Surabaya',
                'supplier_city' => 'Surabaya',
                'supplier_province' => 'Jawa Timur',
                'supplier_phone' => '085810004360',
                'supplier_email' => 'naufal@gmail.com',
            ],
        ]);
    }
}
