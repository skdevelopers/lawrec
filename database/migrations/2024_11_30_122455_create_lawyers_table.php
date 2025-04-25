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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('expertise', 100); // Expertise area, e.g., "Criminal Law: Murder"
            $table->smallInteger('experience')->default(0); // Years of experience
            $table->string('contact', 100)->nullable(); // Contact information
            $table->string('email', 200)->unique();
            $table->string('chamber_address', 100)->nullable();
            $table->string('license_number', 30)->unique();
            $table->string('image', 200)->nullable(); // Profile picture
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
