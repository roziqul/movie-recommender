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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->string('title');
            $table->foreignId('genre_id')->constrained()->cascadeOnDelete();
            $table->string('subtitle')->nullable();
            $table->string('actor');
            $table->text('synopsis');
            $table->float('imdb_rating');
            $table->string('link');
            $table->enum('quality', ['CAM', 'HD', 'FULL HD', '2K', '4K']);
            $table->year('year');
            $table->string('duration');
            $table->enum('region', ['ASIA','AU','EU','US','AFR']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
