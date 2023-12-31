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
        {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id');
            $table->integer('total_of_animals');
            $table->integer('child_animals');
            $table->integer('adult_animals');
            $table->integer('total_expenses');
            $table->integer('expenses_adults');
            $table->integer('expenses_child');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
