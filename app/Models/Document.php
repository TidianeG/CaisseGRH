<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function employee_activite(){
        return $this->belongsToMany(EmployeeActivite::class);
    }

    public function signataire(){
        return $this->belongsTo(Signataire::class);
    }
}
