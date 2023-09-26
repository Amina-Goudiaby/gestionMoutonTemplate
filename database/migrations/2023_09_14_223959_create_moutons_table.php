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
            $table->string('image');
            $table->string('nom');
            $table->string('genealogie');
            $table->string('race');
            $table->integer('poids');
            $table->integer('taille');
            $table->date('dateNaissance');
            $table->integer('prix');
            $table->string('sexe');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('client_id')->nullable()->constrained('clients');
            // $table->foreignId('eleveur_id')->constrained('eleveurs')->onDelete('cascade');
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
