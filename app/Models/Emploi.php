<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    public function employee_activite(){
        return $this->hasMany(EmployeeActivite::class);
    }
}
