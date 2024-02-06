<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_section',
        'nom_section',
        'description',
        'subdivision_id'
    ];

    public function subdivision(){
        return $this->belongsTo(Subdivision::class);
    }

    public function employee_activite(){
        return $this->hasMany(EmployeeActivite::class);
    }
}
