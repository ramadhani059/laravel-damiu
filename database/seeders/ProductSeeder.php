<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'depo_id' => 1,
                'product_name' => 'Aqua 600 ml',
                'product_description' => 'AQUA BOTOL MINI 600 ML COCOK UNTUK SOUVERNIR KARENA UNIK PENGIRIMAN LUAR KOTA, SUDAH TERMASUK BUBBLE WRAP. MASIH BISA DI ORDER SELAMA BARANG MASIH BISA KLIK BELI... BARANG CEPAT HABIS, AYO SEGERA ORDER.. SEBELUM KEHABISAN KARENA SANGAT LIMITED EDITION',
                'product_price' => 10000,
                'product_stock' => 10,
            ], [
                'depo_id' => 2,
                'product_name' => 'Aqua 1,5 Liter',
                'product_description' => 'AQUA BOTOL MINI 1,5 LITER COCOK UNTUK SOUVERNIR KARENA UNIK PENGIRIMAN LUAR KOTA, SUDAH TERMASUK BUBBLE WRAP. MASIH BISA DI ORDER SELAMA BARANG MASIH BISA KLIK BELI... BARANG CEPAT HABIS, AYO SEGERA ORDER.. SEBELUM KEHABISAN KARENA SANGAT LIMITED EDITION',
                'product_price' => 20000,
                'product_stock' => 10,
            ], [
                'depo_id' => 1,
                'product_name' => 'Cleo 1,5 Liter',
                'product_description' => 'CLEO BOTOL MINI 1,5 LITER COCOK UNTUK SOUVERNIR KARENA UNIK PENGIRIMAN LUAR KOTA, SUDAH TERMASUK BUBBLE WRAP. MASIH BISA DI ORDER SELAMA BARANG MASIH BISA KLIK BELI... BARANG CEPAT HABIS, AYO SEGERA ORDER.. SEBELUM KEHABISAN KARENA SANGAT LIMITED EDITION',
                'product_price' => 22000,
                'product_stock' => 10,
            ],
        ]);
    }
}
