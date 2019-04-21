<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opencourse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("sessionNum",2);
            $table->integer("acceptMark",2);
            $table->string("conditions",300);
            $table->dateTime('startDate');
            $table->dateTime('EndDate');
            $table->dateTime('created_at');
            $table->integer("course_Id",11);
            $table->foreign('course_Id')->references('id')->on('course');
            $table->integer("teacher_Id",11);
            $table->foreign('teacher_Id')->references('id')->on('users');
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
        Schema::dropIfExists('open_courses');
    }
}
