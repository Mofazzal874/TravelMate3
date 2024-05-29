<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('imageURL')->nullable();
            $table->text('description')->nullable();
            $table->string('minDuration')->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('closing_hours')->nullable();
            $table->string('price')->nullable();
            $table->string('price_per_night')->nullable();
            $table->string('price_per_day')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('guests')->nullable();
            $table->integer('beds')->nullable();
            $table->string('rating')->nullable();
            $table->enum('type', ['hotel', 'restaurant', 'resort', 'rental house'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
