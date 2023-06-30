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
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('Firstname',50);
            $table->string('Lastname',50);
            $table->char('phone_no',10);
            $table->string('permanent_address',255);
            $table->string('temporary_address',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
