<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('date_id')->constrained();
            $table->unsignedBigInteger('user_id');

            // Allow null values for the rating fields
            $table->integer('price_rating')->nullable();
            $table->integer('setting_rating')->nullable();
            $table->integer('food_rating')->nullable();

            $table->text('comments')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
