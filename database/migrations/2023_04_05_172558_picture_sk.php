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
        Schema::create('picture_sk', function (Blueprint $picture_off) {
            $picture_off->bigIncrements('id');
            $picture_off->string('picture');
            $picture_off->unsignedBigInteger('skill_id');
            $picture_off->foreign('skill_id')->references('id')->on('skill');

            $picture_off->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_sk');
    }
};
