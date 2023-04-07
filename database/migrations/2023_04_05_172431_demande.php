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
        Schema::create('demande', function (Blueprint $demande) {
            $demande->bigIncrements('id');
            $demande->string('title');
            $demande->date('creation_date');
            $demande->date('start_date');
            $demande->unsignedBigInteger('service_id');
            $demande->unsignedBigInteger('homeowner_id');

            $demande->foreign('homeowner_id')->references('id')->on('homeowner');
            $demande->foreign('service_id')->references('id')->on('service');
            $demande->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
