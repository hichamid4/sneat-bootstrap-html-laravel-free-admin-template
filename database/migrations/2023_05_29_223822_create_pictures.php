<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->unsignedBigInteger('skills_id');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->unsignedBigInteger('messages_id');
            $table->foreign('messages_id')->references('id')->on('messages');
            $table->unsignedBigInteger('demandes_id');
            $table->foreign('demandes_id')->references('id')->on('demandes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
};
