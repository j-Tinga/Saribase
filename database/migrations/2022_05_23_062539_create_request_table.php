<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->integer('requestID', true);
            $table->integer('branchID')->index('branchID');
            $table->integer('requesterID')->nullable()->index('requesterID');
            $table->dateTime('dateRequested')->useCurrent();
            $table->enum('paymentType', ['Cash', 'Credit']);
            $table->enum('requestStatus', ['Pending', 'Accepted', 'Denied', 'Delivered', 'Recieved']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
