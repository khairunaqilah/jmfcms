<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGroupIdInStudentsSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students_subjects', function (Blueprint $table) {
            $table->unsignedInteger('group_id')->after('student_id')->nullable();
        });
        Schema::table('students_subjects', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_subjects');
    }
}
