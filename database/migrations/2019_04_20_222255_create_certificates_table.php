<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('certificateDate');
            $table->integer("totalMark")->length(3);

            $table->integer("register_Id");
            $table->foreign('register_Id')->references('id')->on('registerOnCourse');

            $table->integer("openCourse_Id");
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
        Schema::dropIfExists('certificates');
    }
}
