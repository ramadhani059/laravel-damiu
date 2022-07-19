<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Operational_DepoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operational_depos')->insert([
            [
                'depo_id' => 1,
                'operational_date' => Carbon::now(),
                'open_hour' => Carbon::now(),
                'close_hour' => Carbon::now(),
            ],
        ]);
    }
}
