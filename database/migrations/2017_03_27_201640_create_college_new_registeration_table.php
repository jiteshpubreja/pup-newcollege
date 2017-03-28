<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeNewRegisterationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_new_registeration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_college')->unsigned();
            $table->string('ref_id')->unique();           
            $table->string('college_name');
            $table->string('session');
            $table->text('courses');
            $table->boolean('co_education')->default(0); 

            $table->string('railway_station');
            $table->string('bus_stand');
            $table->string('post_office');
            $table->string('telegram');
            $table->string('college_phone_number');
            $table->string('principal_phone_number');
            $table->string('president_of_mgmt_committee');
            $table->string('secretary_office');
            $table->string('principal_residence_phone');


            $table->string('principal_office_building');
            $table->string('classes_count');
            $table->string('classes_size');
            $table->string('staff_room');
            $table->string('commonroom_for_girls');
            $table->string('commonroom_for_boys');
            $table->boolean('reading_room')->default(0);
            $table->string('readingroom_size')->nullable();
            $table->boolean('periodical_room')->default(0);
            $table->string('periodical_room_size')->nullable();
            $table->boolean('studyroom_for_staff')->default(0);
            $table->string('studyroom_for_staff_size')->nullable();
            $table->boolean('science_lab')->default(0);
            $table->string('science_lab_size')->nullable();
            $table->string('another_store_room');
            $table->string('water_supply');
            $table->string('electricity');
            $table->string('boys_washroom');
            $table->string('girls_washroom');
            $table->text('other_details');



            $table->boolean('residence_for_principal')->default(0);
            $table->boolean('required_furniture')->default(0);

            $table->text('land_details');

            $table->boolean('endorsement_fund')->default(0);

            $table->text('endorsement_fund_details')->nullable();
            $table->boolean('resources')->default(0);
            $table->text('resources_detail')->nullable();
            $table->boolean('bank_balance')->default(0);

            $table->boolean('provision_of_25000')->default(0);
            $table->boolean('every_year_10000')->default(0);
            $table->boolean('any_other_amount')->default(0);

            
            $table->boolean('register_committee')->default(0);

            $table->boolean('within_5mile')->default(0);
            $table->string('any_other_college_name')->nullable();


            $table->boolean('early_members')->default(0);
            $table->boolean('appoint_qualifiedfaculty')->default(0);
            $table->boolean('salary_acc_ugc')->default(0);

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
        Schema::dropIfExists('college_new_registeration');
    }
}
