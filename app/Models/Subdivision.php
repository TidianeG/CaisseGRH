<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_subdivision',
        'nom_subdivision',
        'description',
        'direction_id'
    ];

    public function direction(){
        return $this->belongsTo(direction::class);
    }

    public function section(){
        return $this->hasMany(Section::class);
    }
}
