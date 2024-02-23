<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_site',
        'nom_site',
        'description'
    ];

    public function employee_activite(){
        return $this->hasMany(EmployeeActivite::class);
    }

}
