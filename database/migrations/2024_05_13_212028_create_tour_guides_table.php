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
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('places_id'); 
            $table->string('userId')->unique();
            $table->string('operating_area')->nullable();
            $table->string('tour_type')->nullable();
            $table->string('tourist_type')->nullable();
            $table->string('price')->nullable();
            $table->string('rating')->nullable();
            $table->string('tourist_capacity')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('places_id')->references('id')->on('places')->onDelete('cascade'); // Update this line
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_guides');
    }
};