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
        Schema::create('media', function (Blueprint $table) {
            $table->id('media_id');
            $table->timestamps();
            $table->string('Media_file',255);
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('unit');
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('property_id')->on('property');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
