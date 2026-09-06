<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('Full-Stack Web App');
            $table->text('summary');
            $table->longText('description')->nullable();
            $table->json('technologies')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->json('features')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->boolean('featured')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
