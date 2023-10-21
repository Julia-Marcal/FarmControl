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
        Schema::create('sheep', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained();
            $table->integer('total_sheep');
            $table->integer('child_sheep');
            $table->integer('adult_sheep');
            $table->integer('expenses_adults_sheep');
            $table->integer('expenses_child_sheep');
            $table->integer('total_expenses_sheep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheep');
    }
};
