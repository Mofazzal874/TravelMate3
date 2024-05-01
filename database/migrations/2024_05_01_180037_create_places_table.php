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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->binary('imageURL');
            $table->text('description');
            $table->string('minDuration') ;
            $table->string('opening_hours')->nullable();
            $table->string('closing_hours')->nullable();
            $table->string('price');
            $table->string('rating');
            $table->boolean('placeStatus')->default(false); //general - 0 , top - 1 , best - 2
            $table->string('placeType')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
