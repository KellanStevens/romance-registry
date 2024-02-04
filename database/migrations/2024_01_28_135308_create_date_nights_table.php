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
        Schema::create('date_nights', function (Blueprint $table) {
            $table->id();
            $table->date('date')->default(now());
            $table->string('location')->nullable();
            $table->text('google_maps_link')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('date_nights');
    }
};
