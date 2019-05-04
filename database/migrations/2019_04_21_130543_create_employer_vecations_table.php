<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerVecationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employervecation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("employer_Id");
            $table->integer("empolyerUser_Id");
            $table->dateTime('vacationDate');
            $table->foreign('employer_Id')->references('id')->on('employer');
            $table->foreign('empolyerUser_Id')->references('id')->on('employeruser');

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
        Schema::dropIfExists('employer_vecations');
    }
}
