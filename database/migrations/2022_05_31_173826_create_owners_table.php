<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->foreignId('depo_id')->constrained();
            $table->string('owner_name');
            $table->string('owner_address');
            $table->string('owner_city');
            $table->string('owner_province');
            $table->string('owner_phone');
            $table->string('owner_email')->unique();
            $table->string('owner_image_original');
            $table->string('owner_image_encrypted');
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
        Schema::dropIfExists('owners');
    }
}
