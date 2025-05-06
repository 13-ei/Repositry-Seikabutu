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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tourist_spot');
            $table->string('food');
            $table->string('hotel');
            $table->string('money');
            $table->string('impressions');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('tourist_spot_photo');
            $table->string('food_photo');
            $table->string('hotel_photo');
            $table->string('impressions_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
