<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiliereEmploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_filiere_emploi',
        'nom_filiere_emploi',
        'description',
    ];

    public function employee_activite(){
        return $this->hasMany(EmployeeActivite::class);
    }
}
