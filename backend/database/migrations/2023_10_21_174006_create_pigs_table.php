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
        Schema::create('pigs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained();
            $table->integer('total_of_pigs');
            $table->integer('child_pigs');
            $table->integer('adult_pigs');
            $table->integer('expenses_adults_pigs');
            $table->integer('expenses_child_pigs');
            $table->integer('total_expenses_pigs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pigs');
    }
};
