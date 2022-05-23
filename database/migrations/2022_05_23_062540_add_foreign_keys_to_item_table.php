<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->foreign(['supplierID'], 'item_ibfk_3')->references(['supplierID'])->on('supplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['brandID'], 'item_ibfk_2')->references(['brandID'])->on('brand')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->dropForeign('item_ibfk_3');
            $table->dropForeign('item_ibfk_2');
        });
    }
}
