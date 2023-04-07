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
        Schema::create('handyman', function (Blueprint $handyman) {
            $handyman->bigIncrements('id');
            $handyman->string('username');
            $handyman->string('password');
            $handyman->string('fullName');
            $handyman->string('email');
            $handyman->string('cin');
            $handyman->string('tele');
            $handyman->string('address');
            $handyman->string('city');
            $handyman->float('rate');
            $handyman->string('status');
            $handyman->date('birthday');
            $handyman->string('picture');
            $handyman->string('gender');

            $handyman->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handyman');
    }
};
