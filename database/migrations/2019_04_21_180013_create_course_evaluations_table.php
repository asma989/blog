<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_evaluation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_Id');
            $table->integer('trainer_Id');
            $table->integer('student_Id');
            $table->integer('courseEval')->length(1);
            $table->integer('duration')->length(1);
            $table->integer('practicalTime')->length(1);
            $table->integer('place')->length(1);
            $table->integer('tools')->length(1);
            $table->integer('binifits')->length(1);
            $table->integer('extraSubject')->length(1);
            $table->string("binifitNote",200);
            $table->string("extraSubjextNote",200);
            $table->foreign('course_Id')->references('id')->on('openCourse');
            $table->foreign('trainer_Id')->references('id')->on('users');
            $table->foreign('student_Id')->references('id')->on('registeroncourse');


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
        Schema::dropIfExists('course_evaluations');
    }
}
