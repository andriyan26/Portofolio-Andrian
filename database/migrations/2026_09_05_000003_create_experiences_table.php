<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['education', 'work', 'training', 'certification'])->default('education');
            $table->string('title');
            $table->string('institution');
            $table->string('period');
            $table->string('location')->nullable();
            $table->string('score')->nullable();
            $table->text('description')->nullable();
            $table->string('badge')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
