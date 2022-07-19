<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'username' => 'Rhea059',
                'depo_id' => 1,
                'employee_name' => 'Achmad Dafa Firdaus',
                'employee_address' => 'Jl Rungkut Industri Surabaya',
                'employee_city' => 'Surabaya',
                'employee_province' => 'Jawa Timur',
                'employee_phone' => '085646025661',
                'employee_email' => 'achmaddafa@gmail.com',
                'employee_image_original' => 'foto',
                'employee_image_encrypted' => 'foto',
            ],
        ]);
    }
}
