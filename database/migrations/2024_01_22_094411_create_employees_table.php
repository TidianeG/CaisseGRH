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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('genre');
            $table->date('date_embauche');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('situation_familiale');
            $table->string('statut');
            $table->string('religion');
            $table->integer('nin');
            $table->integer('numero_ipres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
