<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeruser', function (Blueprint $table) {
            $table->integer('employer_Id');
            $table->integer('user_Id');
            $table->foreign('user_Id')->references('id')->on('users');
            $table->foreign('employer_Id')->references('id')->on('employers');
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
        Schema::dropIfExists('employer_users');
    }
}
