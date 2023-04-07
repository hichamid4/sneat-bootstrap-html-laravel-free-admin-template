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
        Schema::create('homeowner', function (Blueprint $homeowner) {
            $homeowner->bigIncrements('id');
            $homeowner->string('username');
            $homeowner->string('password');
            $homeowner->string('fullName');
            $homeowner->string('email');
            $homeowner->string('cin');
            $homeowner->string('tele');
            $homeowner->string('address');
            $homeowner->string('city');
            $homeowner->string('geolocation');

            $homeowner->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeowner');
    }
};
