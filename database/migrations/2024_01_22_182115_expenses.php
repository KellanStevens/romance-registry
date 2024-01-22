<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id('ExpenseID');
            $table->unsignedBigInteger('DateNightID');
            $table->foreign('DateNightID')->references('DateNightID')->on('date_nights')->onDelete('cascade');
            $table->date('ExpenseDate');
            $table->string('ExpenseDescription');
            $table->decimal('Amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
