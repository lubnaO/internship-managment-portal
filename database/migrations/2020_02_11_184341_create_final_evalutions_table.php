<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalEvalutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_evalutions', function (Blueprint $table) {
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
            $table->string('Score1');
            $table->string('Score2');
            $table->string('Score3');
            $table->string('Score4');
            $table->string('Score5');
            $table->string('Score6');
            $table->string('Score7');
            $table->string('Score8');
            $table->string('Score9');
            $table->string('Score10');
            $table->string('Score11');
            $table->string('Score12');
            $table->string('Score13');
            $table->string('Score14');
            $table->string('Score15');
            $table->string('Score16');
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
        Schema::dropIfExists('final_evalutions');
    }
}
