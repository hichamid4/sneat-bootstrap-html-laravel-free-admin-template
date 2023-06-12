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
        Schema::create('handyman_skills', function (Blueprint $table) {
            $table->unsignedBigInteger('handymen_id');
            $table->foreign('handymen_id')->references('id')->on('handymen');
            $table->unsignedBigInteger('skills_id');
            $table->foreign('skills_id')->references('id')->on('skills');
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
        Schema::dropIfExists('handyman_skills');
    }
};
