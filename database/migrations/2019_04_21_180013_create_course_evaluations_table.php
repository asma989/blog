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
            $table->integer('course_Id',11);
            $table->integer('trainer_Id',11);
            $table->integer('student_Id',11);
            $table->integer('courseEval',1);
            $table->integer('duration',1);
            $table->integer('practicalTime',1);
            $table->integer('place',1);
            $table->integer('tools',1);
            $table->integer('binifits',1);
            $table->integer('extraSubject',1);
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
