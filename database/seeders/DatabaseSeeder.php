<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
        $this->call([
            User_CategorySeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            DepoSeeder::class,
            OwnerSeeder::class,
            EmployeeSeeder::class,
            CustomerSeeder::class,
            Customer_OrderSeeder::class,
            ProductSeeder::class,
            SupplierSeeder::class,
            Supply_ProductSeeder::class,
            Supply_DetailSeeder::class,
            Order_DetailSeeder::class,
            Operational_DepoSeeder::class,
            ExpenseSeeder::class,
        ]);
    }
    }
}
