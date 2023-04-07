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
        Schema::create('message', function (Blueprint $message) {
            $message->bigIncrements('id');
            $message->string('content');
            $message->string('document');
            $message->string('sent_by');
            $message->unsignedBigInteger('demande_id');
            $message->unsignedBigInteger('offer_id');

            $message->foreign('demande_id')->references('id')->on('demande');
            $message->foreign('offer_id')->references('id')->on('offer');
            $message->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};
