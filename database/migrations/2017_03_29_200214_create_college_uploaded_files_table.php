<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeUploadedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_uploaded_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_college')->unsigned();
            $table->string('ref_id');
            $table->string('filetype');
            $table->string('path');
            $table->timestamps();

            $table->foreign('id_college')->references('id')->on('college_applicants')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ref_id')->references('ref_id')->on('college_new_registeration')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_uploaded_files');
    }
}
