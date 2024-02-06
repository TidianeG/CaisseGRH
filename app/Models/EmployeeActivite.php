<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeActivite extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'employee_id',
        'section_id',
        'emploi_id',
        'fonction_id',
        'filiere_emploi_id',
        'categorie_id'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function emploi(){
        return $this->belongsTo(Emploi::class);
    }

    public function filiere_emploi(){
        return $this->belongsTo(FiliereEmploi::class);
    }

    public function site(){
        return $this->belongsTo(Site::class);
    }

    public function document(){
        return $this->belongsToMany(Document::class);
    }
}
