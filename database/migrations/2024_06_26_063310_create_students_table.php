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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name');
            $table->string('age')->nullable();
            $table->string('gender', 3)->nullable();
            $table->date('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('email');
            $table->integer('phone')->nullable();
            $table->string('account', 20);
            $table->string('password', 20);
            $table->string('images')->nullable();
            $table->string('node')->nullable();
            $table->unsignedBigInteger('className_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
