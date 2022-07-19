<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->foreignId('depo_id')->constrained();
            $table->string('employee_name');
            $table->string('employee_address');
            $table->string('employee_city');
            $table->string('employee_province');
            $table->string('employee_phone');
            $table->string('employee_email')->unique();
            $table->string('employee_image_original');
            $table->string('employee_image_encrypted');
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
        Schema::dropIfExists('employees');
    }
}
