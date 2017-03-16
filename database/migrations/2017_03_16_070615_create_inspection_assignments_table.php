<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_college')->unsigned();
            $table->integer('id_teacher')->unsigned();
            $table->timestamps();

            $table->foreign('id_college')->references('id')->on('college_applicants')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_teacher')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspection_assignments');
    }
}
