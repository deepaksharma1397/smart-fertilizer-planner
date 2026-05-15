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
        Schema::create('recommendations', function (Blueprint $table) {
    $table->id();

    $table->string('farmer_name');
    $table->string('crop_type');
    $table->string('soil_type');

    $table->integer('nitrogen');
    $table->integer('phosphorus');
    $table->integer('potassium');

    $table->string('recommended_fertilizer');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
