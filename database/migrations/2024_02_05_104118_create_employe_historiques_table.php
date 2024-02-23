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
        Schema::create('employe_historiques', function (Blueprint $table) {
            $table->id();

            $table->string('matricule');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('fonction_id');
            $table->unsignedBigInteger('filiere_emploi_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('emploi_id');
            $table->unsignedBigInteger('site_id');
            
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('emploi_id')->references('id')->on('emplois');
            $table->foreign('section_id')->references('id')->on('sections');

            $table->foreign('fonction_id')->references('id')->on('fonctions');
            $table->foreign('filiere_emploi_id')->references('id')->on('filiere_emplois');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('site_id')->references('id')->on('sites');

            $table->date('date_debut');
            $table->date('date_fin');

       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('employe_historiques');
    }
};
