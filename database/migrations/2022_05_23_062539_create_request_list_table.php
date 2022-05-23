<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_list', function (Blueprint $table) {
            $table->integer('requestListID', true);
            $table->integer('requestID')->index('requestID');
            $table->integer('itemID')->index('itemID');
            $table->integer('quantityRequested');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_list');
    }
}
