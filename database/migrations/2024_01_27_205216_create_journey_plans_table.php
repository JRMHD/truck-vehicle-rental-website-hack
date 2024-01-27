<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneyPlansTable extends Migration
{
    public function up()
    {
        Schema::create('journey_plans', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_dropoff_location');
            $table->date('pick_up_date');
            $table->time('pick_up_time');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journey_plans');
    }
}
