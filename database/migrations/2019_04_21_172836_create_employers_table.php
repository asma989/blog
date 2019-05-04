<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_Id');
            $table->string("fullName",30);
            $table->string("phoneNumber",10);
            $table->string("jobTitle",30);
            $table->string("currentAddress",50);
            $table->string("acadamicQualification",30);
            $table->dateTime('startWorking');
            $table->dateTime('birthDate');
            $table->string("birthPlace",20);
            $table->foreign('department_Id')->references('id')->on('department');
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
        Schema::dropIfExists('employers');
    }
}
