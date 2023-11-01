<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Add the 'name' column
            $table->string('email'); // Add the 'email' column
            $table->string('phone_number'); // Add the 'phone_number' column
            $table->string('state'); // Add the 'state' column
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
        Schema::dropIfExists('workus');
    }
};
