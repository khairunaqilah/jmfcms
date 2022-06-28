<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimeFromAndTimeToToLessonschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessonschedules', function (Blueprint $table) {
            $table->string('time_from')->nullable()->after('date');
            $table->string('time_to')->nullable()->after('time_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessonschedules', function (Blueprint $table) {
            //
        });
    }
}
