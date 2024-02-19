<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentEmployeeActivite extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'employee_activite_id',
    ]; 

    public function document(){
        return $this->belongsTo(Document::class);
    }

    public function employee_activite(){
        return $this->belongsTo(EmployeeActivite::class);
    }
}
