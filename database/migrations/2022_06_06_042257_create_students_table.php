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
            
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('age')->nullable(); 
            $table->string('school')->nullable(); 
            $table->string('gender')->nullable();
            $table->string('race')->nullable();
            $table->unsignedInteger('guardian_id')->nullable();
            $table->unsignedInteger('subject_id')->nullable();
            
            $table->timestamps();
        });
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('guardian_id')->references('id')->on('guardians');
            $table->foreign('subject_id')->references('id')->on('subjects');
           
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
