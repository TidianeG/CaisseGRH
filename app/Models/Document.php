<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_document',
        'signataire_id',
    ];                    

    public function signataire(){
        return $this->belongsTo(Signataire::class);
    }

    public function document_employee_activites(){
        return $this->hasMany(DocumentEmployeeActivite::class);
    }

}
