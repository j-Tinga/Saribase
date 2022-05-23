<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->integer('branchID', true);
            $table->string('branchName', 150)->index('branchName');
            $table->string('branchAddress', 100);
            $table->integer('branchManagerID')->nullable()->index('branchManagerID');
            $table->enum('branchType', ['Main', 'Sub']);
            $table->string('branchContact', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
}
