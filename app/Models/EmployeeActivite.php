<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeActivite extends Model
{
    use HasFactory;

    public function direction(){
        return $this->belongsTo(Direction::class);
    }

    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function employe(){
        return $this->hasOne(Employee::class);
    }
}
