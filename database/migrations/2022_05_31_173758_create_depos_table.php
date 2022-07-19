<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depos', function (Blueprint $table) {
            $table->id();
            $table->string('depo_name');
            $table->string('depo_address');
            $table->string('depo_city');
            $table->string('depo_province');
            $table->string('depo_email')->unique();
            $table->string('depo_phone');
            $table->string('depo_location')->unique();
            $table->string('depo_image_original');
            $table->string('depo_image_encrypted');
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
        Schema::dropIfExists('depos');
    }
}
