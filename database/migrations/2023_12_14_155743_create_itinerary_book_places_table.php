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
        Schema::create('itinerary_book_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itinerary_book_id');
            $table->unsignedBigInteger('place_id');
            $table->tinyInteger('day_to');
            $table->time('time');
            $table->timestamps();

            $table->foreign('itinerary_book_id')->references('id')->on('itinerary_books');
            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itinerary_book_places', function (Blueprint $table) {
            $table->dropForeign(['itinerary_book_id', 'place_id']);
        });

        Schema::dropIfExists('itinerary_book_places');
    }
};
