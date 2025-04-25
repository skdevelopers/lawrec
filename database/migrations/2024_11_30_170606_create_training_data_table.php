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
        Schema::create('training_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text'); // Training input, e.g., "Killing someone intentionally."
            $table->string('label', 100); // Label for classification, e.g., "Criminal Law: Murder"
            $table->string('category', 100); // Law category, e.g., "Criminal Law"
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_data');
    }
};
