<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signataire extends Model
{

    use HasFactory;

    protected $fillable = [
        'code_signataire',
        'employe_activite_id',
        'signer',
    ];

    public function document(){
        return $this->hasMany(Document::class);
    }

    public function employe_activite(){
        return $this->belongsTo(EmployeeActivite::class);
    }
    
}
