<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBranchInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branch_inventory', function (Blueprint $table) {
            $table->foreign(['branchID'], 'branch_inventory_ibfk_2')->references(['branchID'])->on('branch')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['itemID'], 'branch_inventory_ibfk_1')->references(['itemID'])->on('item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branch_inventory', function (Blueprint $table) {
            $table->dropForeign('branch_inventory_ibfk_2');
            $table->dropForeign('branch_inventory_ibfk_1');
        });
    }
}
