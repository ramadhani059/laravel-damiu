<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Supply_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supply_details')->insert([
            [
                'supply_id' => 1,
                'product_id' => 1,
                'supply_amount' => 100000,
                'supply_price' => 100000,
            ],
        ]);
    }
}
