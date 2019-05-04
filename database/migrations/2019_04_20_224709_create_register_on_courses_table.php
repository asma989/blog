<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterOnCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeroncourse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_Id");
            $table->integer("course_Id");
            $table->integer("AcceptanceTestMark")->length(3);
            $table->string("status",10);

            $table->foreign('user_Id')->references('id')->on('users');
            $table->foreign('course_Id')->references('id')->on('openCourse');

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
        Schema::dropIfExists('register_on_courses');
    }
}
