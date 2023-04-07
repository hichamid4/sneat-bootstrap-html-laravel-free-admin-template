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
        Schema::create('service', function (Blueprint $service) {
            $service->bigIncrements('id');
            $service->string('service_name');
            $service->string('description');
            $service->unsignedBigInteger('category_id');
            $service->foreign('category_id')->references('id')->on('category');

            $service->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
