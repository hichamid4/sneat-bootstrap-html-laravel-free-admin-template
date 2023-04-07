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
        Schema::create('admin', function (Blueprint $admin) {
            $admin->bigIncrements('id');
            $admin->string('username');
            $admin->string('password');
            $admin->string('fullName');
            $admin->string('email');
            $admin->string('cin');
            $admin->string('tele');
            $admin->string('address');
            $admin->string('city');

            $admin->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
