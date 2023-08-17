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
        Schema::create('units', function (Blueprint $table) {
            $table->id('unit_id');
            $table->decimal('price');
            $table->enum('Condition',["Good","Average","Poor"]);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('landlords')->onDelete('cascade');
            $table->decimal('Average_rating',2,1);
            $table->unsignedBigInteger('property_id');
            // $table->foreign('property_id')->references('property_id')->on('properties');
            $table->enum('status',["Available","UnAvailable"]);
            // $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('property_id')->on('properties')
                ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
