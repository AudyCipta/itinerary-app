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
        Schema::create('itinerary_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itinerary_id');
            $table->unsignedBigInteger('place_id');
            $table->datetime('start');
            $table->timestamps();

            $table->foreign('itinerary_id')->references('id')->on('itineraries');
            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itinerary_places', function (Blueprint $table) {
            $table->dropForeign(['itinerary_id', 'place_id']);
        });

        Schema::dropIfExists('itinerary_places');
    }
};
