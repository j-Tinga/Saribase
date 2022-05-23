<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_inventory', function (Blueprint $table) {
            $table->integer('inventoryID', true);
            $table->integer('branchID')->index('branchID');
            $table->integer('itemID')->index('itemID');
            $table->integer('itemQuantity');
            $table->dateTime('dateUpdated')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_inventory');
    }
}
