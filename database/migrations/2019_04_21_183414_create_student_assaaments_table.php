<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAssaamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentassess', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('totalMark',2);
            $table->dateTime('assaamentDate');

            $table->integer("registerStudent_Id",11);
            $table->foreign('registerStudent_Id')->references('id')->on('registerOnCourse');

            $table->integer("openCourse_Id",11);
            $table->foreign('openCourse_Id')->references('id')->on('opencourse');
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
        Schema::dropIfExists('student_assaaments');
    }
}
