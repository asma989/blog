<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptanceTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceptancetestquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("CourseId",11);
            $table->string("Question",200); 
            $table->string("ChoiceA",50); 
            $table->string("ChoiceB",50); 
            $table->string("ChoiceC",50); 
            $table->string("ChoiceD",50); 
            $table->string("CorrectChoice",1); 
            $table->integer("Mark",2);
            $table->foreign('Course_Id')->references('id')->on('course');
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
        Schema::dropIfExists('acceptance_test__questions');
    }
}
