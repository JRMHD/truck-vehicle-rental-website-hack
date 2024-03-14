<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('document_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('mc_number');
            $table->string('dot');
            $table->string('driver_license');
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_submissions');
    }
}
