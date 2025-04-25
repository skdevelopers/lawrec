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
        Schema::create('lawsuits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User filing the lawsuit
            $table->string('lawsuit_type', 100); // Main category, e.g., "Criminal Law"
            $table->string('sub_type', 100)->nullable(); // Subcategory, e.g., "Murder"
            $table->text('description'); // Lawsuit details
            $table->string('status', 50)->default('pending'); // Status: pending, resolved, rejected
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawsuits');
    }
};
