<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('A_name');
            $table->text('A_description')->nullable();
            $table->string('AC_name');
            $table->foreign('AC_name')->references('co_name')->on('companies');
            $table->date('A_start');
            $table->date('A_end');

            




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
        Schema::dropIfExists('announcaments');
    }
}
