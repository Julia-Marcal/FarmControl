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
        Schema::create('cows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained();
            $table->integer('total_of_cows');
            $table->integer('child_cows');
            $table->integer('adult_cows');
            $table->integer('expenses_adults_cow');
            $table->integer('expenses_child_cows');
            $table->integer('total_expenses_cows');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cows');
    }
};
