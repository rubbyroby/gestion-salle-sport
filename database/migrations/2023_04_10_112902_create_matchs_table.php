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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->string('titulaire');
            $table->TIME('horaire');
            $table->unsignedBigInteger('id_equipe');
            $table->foreign('id_equipe')->references('id')->on('equipes')->onDelete('cascade');
            $table->unsignedBigInteger('id_resultat');
            $table->foreign('id_resultat')->references('id')->on('resultats')->onDelete('cascade'); 
            $table->unsignedBigInteger('id_classement');
            $table->foreign('id_classement')->references('id')->on('classements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
