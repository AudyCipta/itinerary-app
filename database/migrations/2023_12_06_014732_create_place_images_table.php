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
        Schema::create('place_images', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->unsignedBigInteger('place_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('place_images', function (Blueprint $table) {
            $table->dropForeign('place_id');
        });

        Schema::dropIfExists('place_images');
    }
};
