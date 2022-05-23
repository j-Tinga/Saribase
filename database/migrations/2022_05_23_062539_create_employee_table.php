<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('employeeID', true);
            $table->integer('employeeLevelID')->nullable()->index('employeeLevelID');
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('contactNumber', 50);
            $table->longText('password');
            $table->integer('branchID')->nullable()->index('branchID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
