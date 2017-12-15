<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionReportMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_report_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inspection')->unsigned();
            $table->integer('id_teacher')->unsigned();
            $table->timestamps();
            
            $table->foreign('id_inspection')->references('id')->on('inspection_reports')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('inspection_report_members');
    }
}
