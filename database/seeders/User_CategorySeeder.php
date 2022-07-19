<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class User_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_categories')->insert([
            [
                'categories_name' => 'Admin'
            ],[
                'categories_name' => 'Employee'
            ],[
                'categories_name' => 'Owner'
            ],[
                'categories_name' => 'Customer'
            ],
        ]);
    }
}
