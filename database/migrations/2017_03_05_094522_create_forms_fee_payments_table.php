<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsFeePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_fee_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_college')->unsigned();
            $table->integer('id_form_fee_requirement')->unsigned();
            $table->integer('id_fee_payment')->unsigned();
            $table->timestamps();

            $table->foreign('id_college')->references('id')->on('college_applicants')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_form_fee_requirement')->references('id')->on('forms_fee_requirements')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_fee_payment')->references('id')->on('fee_payments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms_fee_payments');
    }
}
