<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessonschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity');
            $table->date('date');
            $table->string('remarks');
            $table->string('status');
            $table->unsignedInteger('group_id')->nullable();
            $table->unsignedInteger('teacher_id')->nullable();
            $table->timestamps();
        });
        Schema::table('lessonschedules', function (Blueprint $table) {
            
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('teacher_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessonschedules');
    }
}