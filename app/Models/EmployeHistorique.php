<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeHistorique extends Model
{
    use HasFactory;

    public function employe_activite(){
        return $this->belongsTo(EmployeeActivite::class);
    }
}
