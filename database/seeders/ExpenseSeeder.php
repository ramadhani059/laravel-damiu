<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expenses')->insert([
            [
                'depo_id' => 1,
                'expense_date' => Carbon::now(),
                'expenses_good' => 'Aqua',
                'expenses_description' => 'Air Minum',
                'expenses_total' => 30000,
                'expenses_price' => 30000,
                'expenses_transaction_image' => bcrypt('foto'),
            ],
        ]);
    }
}
