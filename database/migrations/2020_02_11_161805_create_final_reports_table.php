<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TraineeName');
            $table->string('TraineeID');
            $table->string('TraineeDepartment');
            $table->string('Traineemajor');
            $table->string('TraineePhone');
            $table->string('TraineeEmail');
            $table->string('SupervisorName');
            $table->string('SupervisorDepartment');
            $table->string('SupervisorPhone');
            $table->string('SupervisorEmail');
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
            $table->string('OrganizationName');
            $table->string('OrganizationD');
            $table->string('OrganizationPhone');
            $table->string('OrganizationFax');
            $table->string('OrganizationEmail');
            $table->string('OrganizationSignature');
            $table->date('SignatureDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('final_reports');
    }
}
