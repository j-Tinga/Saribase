<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->foreign(['branchID'], 'employee_ibfk_2')->references(['branchID'])->on('branch')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['employeeLevelID'], 'employee_ibfk_1')->references(['employeeLevelID'])->on('employee_level')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->dropForeign('employee_ibfk_2');
            $table->dropForeign('employee_ibfk_1');
        });
    }
}
