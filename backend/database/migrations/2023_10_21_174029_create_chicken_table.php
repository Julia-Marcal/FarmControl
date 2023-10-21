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
        Schema::create('chicken', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained();
            $table->integer('total_of_chickens');
            $table->integer('child_chickens');
            $table->integer('adult_chickens');
            $table->integer('expenses_adults_chickens');
            $table->integer('expenses_child_chickens');
            $table->integer('total_expenses_chickens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chicken');
    }
};
