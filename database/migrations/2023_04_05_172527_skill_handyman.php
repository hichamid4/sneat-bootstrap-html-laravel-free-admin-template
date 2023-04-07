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
        Schema::create('skill_handyman', function (Blueprint $skill_handyman) {
            $skill_handyman->unsignedBigInteger('handyman_id');
            $skill_handyman->unsignedBigInteger('skill_id');
            $skill_handyman->foreign('skill_id')->references('id')->on('skill');
            $skill_handyman->foreign('handyman_id')->references('id')->on('handyman');

            $skill_handyman->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_handyman');
    }
};
