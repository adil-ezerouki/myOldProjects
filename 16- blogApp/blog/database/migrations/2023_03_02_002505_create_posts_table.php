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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->default(0)->constrained('authors')->cascadeOnDelete();
            $table->string('title')->default('');
            $table->string('content',10000)->default('');
            $table->foreignId('gategory_id')->default(0)->constrained('gategories')->cascadeOnDelete();
            $table->string('thumbnail')->default('');
            $table->boolean('isPosted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
