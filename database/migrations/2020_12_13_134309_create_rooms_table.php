<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('RoomNumber');
            $table->string('Occupant', 50)->nullable();
            $table->dateTime('CheckIn')->nullable();
            $table->dateTime('CheckOut')->nullable();
            $table->enum('Status', ['Vacant', 'Occupied', 'Reserved']);
            $table->enum('Type', ['Standard', 'Deluxe', 'Suite', 'Loft']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
