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
        Schema::create('skill', function (Blueprint $skill) {
            $skill->bigIncrements('id');
            $skill->string('skill_name');
            $skill->string('description');
            $skill->unsignedBigInteger('service_id');
            $skill->foreign('service_id')->references('id')->on('service');

            $skill->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill');
    }
};
