<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fee_month');
            $table->string('payment_deadline')->nullable();
            $table->string('receipt')->nullable();
            $table->string('payment_status')->nullable();
            $table->unsignedInteger('guardian_id')->nullable();
            $table->unsignedInteger('admin_id')->nullable();
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
        Schema::dropIfExists('fee_trackers');
    }
}
