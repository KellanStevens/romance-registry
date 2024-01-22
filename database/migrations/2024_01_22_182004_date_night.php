<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('date_nights', function (Blueprint $table) {
            $table->id('DateNightID');
            $table->date('Date');
            $table->string('Location');
            $table->string('GoogleMapsLink');
            $table->text('Description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('date_nights');
    }
};
