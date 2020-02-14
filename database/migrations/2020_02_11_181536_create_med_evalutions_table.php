<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedEvalutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_evalutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('StudentName');
            $table->string('StudentID');
            $table->string('TrainingOrganization');
            $table->string('DepartmentName');
            $table->string('Startdate');
            $table->string('Enddate');
            $table->string('TrainingSupervisor');
            $table->text('AccomplishedTasks');
            $table->text('SkillsAcquired');
            $table->text('KnowledgeUsed');
            $table->text('KeyMeetings');
            $table->text('Issues');
            $table->text('Feedback');
           
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
        Schema::dropIfExists('med_evalutions');
    }
}
