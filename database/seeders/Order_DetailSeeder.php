<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'product_id' => 1,
                'order_id' => 1,
                'order_amount' => 10000,
                'order_price' => 10000,
            ],
        ]);
    }
}
