<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainerevaluation', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('trainer_Id');
  
            $table->integer('timing')->length(1);
            $table->integer('coursePoints')->length(1);
            $table->integer('practical_theory')->length(1);
            $table->integer('explain')->length(1);
            $table->integer('tools')->length(1);
            $table->integer('discussion')->length(1);
            $table->integer('extraSubject')->length(1);
            $table->string("trainerNote",200);
            $table->string("extraNote",200);

            $table->foreign('trainer_Id')->references('id')->on('users');

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
        Schema::dropIfExists('trainer_evaluations');
    }
}
