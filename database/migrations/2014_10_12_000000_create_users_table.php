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
        Schema::create('users', function (Blueprint $table) {
            $table->string('photo_profile');
            $table->string('names');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('email')->unique();
            $table->date('birthday');
            $table->string('phone_number');
            $table->string('control_number');
            $table->string('career');
            $table->date('admission_day');
            $table->string('school_origin');
            $table->string('user');
            $table->string('password');
            $table->integer('rol')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
