<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('places_id')->constrained('places');
            $table->foreignId('tourGuide_id')->nullable()->constrained('tour_guides');
            $table->foreignId('hotels_id')->nullable()->constrained('hotels');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->date('dob');
            $table->string('country');
            $table->string('city');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->enum('booking_status', ['pending', 'approved'])->default('pending');
            $table->enum('payment_status', ['not_paid', 'paid'])->default('not_paid');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
