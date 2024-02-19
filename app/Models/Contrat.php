<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_contrat',
        'description',
    ];

    public function employe_activite(){
        return $this->belongsToMany(EmployeeActivite::class);
    }
}
