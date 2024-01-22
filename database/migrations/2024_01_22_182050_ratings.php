<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('RatingID');
            $table->unsignedBigInteger('DateNightID');
            $table->foreign('DateNightID')->references('DateNightID')->on('date_nights')->onDelete('cascade');
            $table->integer('Price');
            $table->integer('Setting');
            $table->integer('Food');
            $table->text('TextRating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
