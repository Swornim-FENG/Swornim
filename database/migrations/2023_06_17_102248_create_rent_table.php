<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rent', function (Blueprint $table) {
            $table->id('rent_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('tenant');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('unit');
            $table->integer('price');
            $table->date('Start_date');
            $table->date('End_date');
            $table->enum('status',["paid","Unpaid"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent');
    }
};
