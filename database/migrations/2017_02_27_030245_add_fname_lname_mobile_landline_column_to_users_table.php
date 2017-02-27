<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFnameLnameMobileLandlineColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','fname');
            $table->string('lname');
            $table->string('mobile');
            $table->string('landline');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('fname','name');
            $table->dropColumn('lname');
            $table->dropColumn('mobile');
            $table->dropColumn('landline');
        });
    }
}
