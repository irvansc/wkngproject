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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('web_name')->nullable();
            $table->string('web_desc')->nullable();
            $table->string('web_email')->nullable();
            $table->string('web_wa')->nullable();
            $table->string('web_address')->nullable();
            $table->string('web_maps')->nullable();
            $table->string('web_logo')->nullable();
            $table->string('web_favicon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
