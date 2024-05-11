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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('image')->nullable();
            $table->string('username')->nullable(); 
            $table->string('bio')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable(); 
            $table->string('dob')->nullable();
            $table->string('about')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('skills')->nullable();
            $table->string('languages')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('postal_code');
            $table->dropColumn('image');
            $table->dropColumn('username');
            $table->dropColumn('bio');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
            $table->dropColumn('instagram');
            $table->dropColumn('youtube');
            $table->dropColumn('website');
            $table->dropColumn('status');
            $table->dropColumn('gender') ; 
            $table->dropColumn('dob');
            $table->dropColumn('about');
            $table->dropColumn('experience');
            $table->dropColumn('education');
            $table->dropColumn('skills');
            $table->dropColumn('languages');
        });
    }
};
