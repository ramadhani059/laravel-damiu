<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('depo_id')->constrained();
            $table->dateTime('order_datetime');
            $table->integer('order_total_product');
            $table->integer('order_price');
            $table->string('order_location');
            $table->string('order_status');
            $table->dateTime('order_finish_datetime')->nullable();
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
        Schema::dropIfExists('customer_orders');
    }
}
