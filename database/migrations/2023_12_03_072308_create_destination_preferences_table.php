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
        Schema::create('destination_preferences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('destination_category_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('destination_category_id')->references('id')->on('destination_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destination_preferences', function (Blueprint $table) {
            $table->dropForeign('destination_category_id');
        });

        Schema::dropIfExists('destination_preferences');
    }
};
