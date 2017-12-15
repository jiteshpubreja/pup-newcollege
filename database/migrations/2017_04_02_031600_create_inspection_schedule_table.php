<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_assignment')->unsigned();
            $table->timestamp('date');
            $table->timestamps();

            $table->foreign('id_assignment')->references('id')->on('inspection_assignments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspection_schedule');
    }
}
