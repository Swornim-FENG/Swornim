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
        Schema::create('tenant', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('Firstname',50);
            $table->char('phone_number',10);
            $table->string('address',255);
            $table->string('Lastname',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant');
    }
};
