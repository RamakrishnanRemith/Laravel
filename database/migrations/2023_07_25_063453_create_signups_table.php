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
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('teacher_id');
            $table->string('Qualification');
            $table->date('dob');
            $table->string('gender');
            $table->string('email');
            $table->string('password');
            $table->string('contact');
            $table->string('address');
            $table->string('zip');
            $table->binary('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};
