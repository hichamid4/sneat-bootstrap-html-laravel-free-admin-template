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
        Schema::create('offer', function (Blueprint $offer) {
            $offer->bigIncrements('id');
            $offer->float('price');
            $offer->String('description');
            $offer->date('start_date');
            $offer->date('end_date');
            $offer->unsignedBigInteger('review_id')->nullable();
            $offer->unsignedBigInteger('demande_id');

            $offer->foreign('review_id')->references('id')->on('review');
            $offer->foreign('demande_id')->references('id')->on('demande');
            $offer->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer');
    }
};
