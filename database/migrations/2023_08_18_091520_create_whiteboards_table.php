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
        Schema::create('whiteboards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id'); // Define foreign key relationship
            // $table->foreignIdFor(Event::class);
            $table->string('content');
            $table->string('detail');
            $table->string('status')->default('Not Done Yet');
            $table->timestamps(); 

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whiteboards');
    }
};
