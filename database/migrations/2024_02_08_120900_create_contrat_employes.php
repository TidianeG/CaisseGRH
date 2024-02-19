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
        Schema::create('contrat_employes', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->date('date_fin');


            $table->unsignedBigInteger('employe_activite_id');
            $table->foreign('employe_activite_id')->references('id')->on('employee_activites');

            $table->unsignedBigInteger('contrat_id');
            $table->foreign('contrat_id')->references('id')->on('contrats');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat_employes');
    }
};
