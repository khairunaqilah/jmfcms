<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('nric');
            $table->string('age');
            $table->string('school');
            $table->string('gender');
            $table->string('race');
            $table->unsignedInteger('subject_id')->nullable(); //jgn lupa refer github utk foreign key,and set integer srudent nombor 100 increemtn,then baru migrate
            $table->unsignedInteger('guardian_id')->nullable();
            $table->timestamps();
        });
        Schema::table('students', function (Blueprint $table) {
            
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('guardian_id')->references('id')->on('guardians');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
