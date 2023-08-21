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
        Schema::create('edit_budgets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');

            // $table->decimal('total_budget', 8, 2)->default(0.00)->nullable();
            $table->string('item');
            $table->string('price');
            $table->timestamps();
            
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edit_budgets');
    }
};
