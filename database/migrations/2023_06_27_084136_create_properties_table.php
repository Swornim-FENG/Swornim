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
        Schema::create('properties', function (Blueprint $table) {
            $table->string('address',255);
            $table->enum('condition',["Good","Average","Poor"]);
            $table->integer('number_of_rooms');
            $table->id('property_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('landlords');
            $table->enum('Verification',["Verified","Unverified"]);
            $table->decimal('Latitude',9,6);
            $table->decimal('Longitude',9,6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
