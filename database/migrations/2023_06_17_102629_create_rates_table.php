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
        Schema::create('rates', function (Blueprint $table) {
            $table->char('rating',1);
            $table->timestamps();
            $table->id('rate_id');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('unit');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('tenant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
