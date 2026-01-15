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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->longText('en_ourstory')->nullable();
            $table->longText('ar_ourstory')->nullable();
            $table->longText('en_safety')->nullable();
            $table->longText('ar_safety')->nullable();
            $table->longText('en_transparency')->nullable();
            $table->longText('ar_transparency')->nullable();
            $table->longText('en_innovation')->nullable();
            $table->longText('ar_innovation')->nullable();
            $table->longText('en_credibility')->nullable();
            $table->longText('ar_credibility')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
