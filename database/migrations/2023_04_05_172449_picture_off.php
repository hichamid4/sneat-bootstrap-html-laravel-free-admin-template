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
        Schema::create('picture_off', function (Blueprint $picture_off) {
            $picture_off->bigIncrements('id');
            $picture_off->string('picture');
            $picture_off->unsignedBigInteger('demande_id')->nullable();
            $picture_off->unsignedBigInteger('offer_id')->nullable();

            $picture_off->foreign('demande_id')->references('id')->on('demande');
            $picture_off->foreign('offer_id')->references('id')->on('offer');
            $picture_off->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_off');
    }
};
