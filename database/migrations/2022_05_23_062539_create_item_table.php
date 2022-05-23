<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->integer('itemID', true);
            $table->integer('brandID')->index('brandID');
            $table->string('itemName', 100);
            $table->float('price', 10, 0);
            $table->float('sellingPrice', 10, 0);
            $table->string('unitCount', 15);
            $table->date('dateAdded')->nullable();
            $table->integer('supplierID')->index('supplierID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
