<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsFeeRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_fee_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_form_list')->unsigned();
            $table->integer('id_fee_structure')->unsigned();
            $table->timestamps();

            $table->foreign('id_form_list')->references('id')->on('forms_list')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_fee_structure')->references('id')->on('account_fee_structure')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms_fee_requirements');
    }
}
