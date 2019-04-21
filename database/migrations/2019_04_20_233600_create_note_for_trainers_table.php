<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteForTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notefortrainer', function (Blueprint $table) {
            $table->increments('id');
            $table->string("note",500);
            $table->integer("student_Id",11);
            $table->foreign('student_Id')->references('id')->on('registerOnCourse');

            $table->integer("openCourse_Id",11);
            $table->foreign('openCourse_Id')->references('id')->on('registerOnCourse');
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
        Schema::dropIfExists('note_for_trainers');
    }
}
