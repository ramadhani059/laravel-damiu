<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supply_id');
            $table->foreign('supply_id')->references('id')->on('supply_products');
            $table->foreignId('product_id')->constrained();
            $table->integer('supply_amount');
            $table->integer('supply_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_details');
    }
}
