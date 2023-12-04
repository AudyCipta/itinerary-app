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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('destination_preference_id');
            $table->text('description');
            $table->string('picture')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('destination_preference_id')->references('id')->on('destination_preferences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('places', function (Blueprint $table) {
            $table->dropForeign('destination_preference_id');
        });

        Schema::dropIfExists('places');
    }
};
