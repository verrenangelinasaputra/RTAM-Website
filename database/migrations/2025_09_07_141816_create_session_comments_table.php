<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('session_comments', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // contoh: "Day 1"
            $table->string('session_id'); // contoh: "day1-session1"
            $table->text('comment');
            $table->unsignedBigInteger('user_id')->nullable(); // opsional, kalau mau relate ke users
            $table->timestamps();

            // Kalau mau foreign key ke users
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session_comments');
    }
};
