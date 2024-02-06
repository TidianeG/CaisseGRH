<?php

namespace App\Models;

use App\Enums\EmployeGenre;
use App\Enums\EmployeGenreEnum;
use App\Enums\EmployeReligionEnum;
use App\Enums\EmployeSituationFamilialeEnum;
use App\Enums\EmployeStatutEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'prenom',
        'nom',
        'adresse',
        'telephone',
        'genre',
        'date_embauche',
        'date_naissance',
        'lieu_naissance',
        'situation_familiale',
        'religion',
        'nin',
        'numero_ipres',
        'statut'

    ];

    public function employee_activite(){
        return $this->hasMany(EmployeeActivite::class);
    }


    protected $casts = [
        'genre' => EmployeGenreEnum::class,
        'statut' => EmployeStatutEnum::class,
        'religion' => EmployeReligionEnum::class,
        'situation_familiale' => EmployeSituationFamilialeEnum::class,
    ];
}
