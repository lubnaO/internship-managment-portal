<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicantIdToAnnouncamentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Announcaments', function (Blueprint $table) {
            $table->string('Applicant_id');
            $table->foreign('Applicant_id')->references('id')->on('Applicants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Announcaments', function (Blueprint $table) {
            //
        });
    }
}
