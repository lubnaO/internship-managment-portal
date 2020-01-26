<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcIdToAnnouncamentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('announcaments', function (Blueprint $table) {
            $table->integer('AC_id');
            $table->foreign('AC_id')->references('company_id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('announcaments', function (Blueprint $table) {
            //
        });
    }
}
