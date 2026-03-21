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
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->timestamps();
            $table->foreignId('comment_id')->references('id')->on('comments')->onDelete('cascade');
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('reaction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};
