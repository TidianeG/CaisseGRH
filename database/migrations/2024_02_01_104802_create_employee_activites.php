<?php

use App\Models\Categorie;
use App\Models\Emploi;
use App\Models\Employee;
use App\Models\FiliereEmploi;
use App\Models\Fonction;
use App\Models\Section;
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
        Schema::create('employee_activites', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            
            // $table->foreignIdFor(Employee::class);
            // $table->foreignIdFor(Section::class);
            // $table->foreignIdFor(Fonction::class);
            // $table->foreignIdFor(FiliereEmploi::class);
            // $table->foreignIdFor(Categorie::class);
            // $table->foreignIdFor(Emploi::class);

            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('fonction_id');
            $table->unsignedBigInteger('filiere_emploi_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('emploi_id');
            
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('emploi_id')->references('id')->on('emplois');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('fonction_id')->references('id')->on('fonctions');
            $table->foreign('filiere_emploi_id')->references('id')->on('filiere_emplois');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_activites');
    }
};
