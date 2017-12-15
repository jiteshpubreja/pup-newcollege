<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscrepancyApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discrepancy_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_discrepancy_list')->unsigned();
            $table->integer('id_college')->unsigned();
            $table->boolean('is_discrepancy');
            $table->string('remarks')->nullable();
            $table->integer('id_inspection')->unsigned();
            $table->timestamps();

            $table->foreign('id_discrepancy_list')->references('id')->on('discrepancy_list')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_college')->references('id')->on('college_applicants')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_inspection')->references('id')->on('inspection_reports')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discrepancy_applications');
    }
}
