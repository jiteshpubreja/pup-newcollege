<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoiColumnToCollegeNewRegisterationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('college_new_registeration', function (Blueprint $table) {
            $table->boolean('is_seen_by_dean')->default(0);
            $table->boolean('is_loi_granted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_new_registeration', function (Blueprint $table) {
            $table->dropColumn('is_seen_by_dean');
            $table->dropColumn('is_loi_granted');
        });
    }
}
