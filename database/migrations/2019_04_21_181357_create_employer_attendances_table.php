<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerattendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_Id');
            $table->integer('attendance')->length(10);
            $table->dateTime('dateOfAttendance');
            $table->foreign('employer_Id')->references('id')->on('employers');
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
        Schema::dropIfExists('employer_attendances');
    }
}
