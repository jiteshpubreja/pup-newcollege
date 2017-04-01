<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeanColumnToInspectionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_reports', function (Blueprint $table) {
            $table->boolean('is_seen_by_dean')->default(0);
            $table->boolean('is_approved_by_dean')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_reports', function (Blueprint $table) {
            $table->dropColumn('is_seen_by_dean');
            $table->dropColumn('is_approved_by_dean');
        });
    }
}
