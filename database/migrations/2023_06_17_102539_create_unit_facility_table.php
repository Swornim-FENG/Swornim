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
        Schema::create('unit_facility', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('facility_id')->on('facility_list');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('unit');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_facility');
    }
};
