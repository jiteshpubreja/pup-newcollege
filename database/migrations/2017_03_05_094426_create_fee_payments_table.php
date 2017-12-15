<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_college')->unsigned();
            $table->string('president_name');
            $table->string('purpose');
            $table->string('amount');
            $table->string('draft_no');
            $table->string('bank_name');
            $table->string('dated');
            $table->string('draft_image');
            $table->boolean('is_verified')->default(0);
            $table->integer('verified_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_college')->references('id')->on('college_applicants')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_payments');
    }
}
