<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->bigInteger('phone_number');
            $table->string('email', 100)->unique();
            $table->string('address')->nullable();
            $table->string('img');
            $table->string('cv');
            $table->string('facebook_link');
            $table->string('github_link');
            $table->string('whatsapp_link');
            $table->string('linkedin_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
