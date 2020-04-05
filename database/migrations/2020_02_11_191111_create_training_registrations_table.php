<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('StudentName');
            $table->string('StudentID');
            $table->string('SMajor');
            $table->string('TrainingOrganization');
            $table->string('SupervisorInfo');
            $table->string('TraineeTaske');
            $table->string('TraineHoure');
            $table->date('TraineDate');
            $table->string('SupervisorName');
            $table->string('SupervisorJob');
         
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
        Schema::dropIfExists('training_registrations');
        
    }
}
