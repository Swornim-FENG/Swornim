<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function change(): void
    {
        // For the units table
        Schema::table('units', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('property_id')->on('properties')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')
                ->references('user_id')->on('landlords')
                ->onDelete('cascade');
        });

        // For the medias table
        Schema::table('medias', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('property_id')->on('properties')
                ->onDelete('cascade');

            $table->unsignedBigInteger('unit_id'); 
            $table->foreign('unit_id')
            ->references('unit_id')->on('units')
            ->onDelete('cascade');
        });

        // For the unit_facilities table
        Schema::table('unit_facilities', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')
                ->references('facility_id')->on('facility_lists')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')
                ->references('unit_id')->on('units')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('units', function (Blueprint $table) {
    //         $table->dropForeign(['property_id']);
    //         $table->dropForeign(['user_id']);
    //     });

    //     Schema::table('medias', function (Blueprint $table) {
    //         $table->dropForeign(['property_id']);
    //         $table->dropForeign(['unit_id']);
    //     });

    //     Schema::table('unit_facilities', function (Blueprint $table) {
    //         $table->dropForeign(['facility_id']);
    //         $table->dropForeign(['unit_id']);
    //     });
    // }
};
