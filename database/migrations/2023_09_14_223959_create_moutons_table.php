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
        Schema::create('moutons', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('genealogie');
            $table->string('race');
            $table->string('age');
            $table->string('description');
            $table->integer('prix');
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->foreignId('eleveur_id')->constrained('eleveurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moutons');
    }
};
