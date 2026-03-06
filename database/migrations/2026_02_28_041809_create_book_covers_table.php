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
        Schema::create('book_covers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique(); 
            $table->timestamps();
            $table->string('book_name');
            $table->string('book_image');
            $table->integer('book_rate');
            $table->integer('book_page_number');
            $table->string('book_description');
            $table->foreignId('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_covers');
    }
};
