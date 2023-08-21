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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date');
            $table->string('hour');
            $table->string('minute');
            $table->enum('timeType', ['AM','PM']);
            $table->string('detail');
            $table->string('property');
            $table->string('image_path')->default('')->nullable(); // nullable for destroyEvent in Http/Controllers/EventController.php
            $table->timestamps();
            // $table->foreign('event_id')->references('id')->on('whiteboards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
