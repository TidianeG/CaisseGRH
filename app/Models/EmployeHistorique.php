<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeHistorique extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'employee_id',
        'section_id',
        'fonction_id',
        'filiere_emploi_id',
        'categorie_id',
        'emploi_id',
        'date_debut',
        
        'site_id',
        
    ];

    public function employee(){
        return $this->belongsTo(EmployeeActivite::class);
    }
}
