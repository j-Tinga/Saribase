<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request', function (Blueprint $table) {
            $table->foreign(['requesterID'], 'request_ibfk_3')->references(['employeeID'])->on('employee')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['branchID'], 'request_ibfk_2')->references(['branchID'])->on('branch')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request', function (Blueprint $table) {
            $table->dropForeign('request_ibfk_3');
            $table->dropForeign('request_ibfk_2');
        });
    }
}
