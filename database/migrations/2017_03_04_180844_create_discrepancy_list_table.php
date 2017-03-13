<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscrepancyListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discrepancy_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',500);
            $table->integer('id_discrepancy_category')->unsigned();
            $table->timestamps();

            $table->foreign('id_discrepancy_category')->references('id')->on('discrepancy_category_list')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discrepancy_list');
    }
}
