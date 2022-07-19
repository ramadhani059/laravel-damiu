<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Supply_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supply_products')->insert([
            [
                'supplier_id' => 1,
                'supply_date' => Carbon::now(),
                'supply_total_price' => 100000,
                'supply_transaction_image_original' => '-',
                'supply_transaction_image_encrypted' => '-',
            ],
        ]);
    }
}
