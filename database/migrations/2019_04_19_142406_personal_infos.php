<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('fullName', 30);
        $table->date('BirthDate');
        $table->integer('gender')->length(1);
        $table->string('nationality', 10);
        $table->integer('phoneNumber')->length(10);
        $table->string('currentAddress', 30);
        $table->tinyInteger('studyCont')->length(1);
        $table->string('acadamicQualification', 20);
        $table->integer('userId');
        $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personal_infos');
    }
}
