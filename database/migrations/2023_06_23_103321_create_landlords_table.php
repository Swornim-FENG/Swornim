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
        Schema::create('landlords', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('Firstname',50);
            $table->char('phone_number',10);
            $table->string('Lastname',50);
            $table->enum('status',["Active","Inactive"]);
            $table->string('permanent_address',255);
            $table->string('temporary_address',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlords');
    }
};
