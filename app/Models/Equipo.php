<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public $timestamps = false;

    //Relacion de uno a muchos
    public function partidos(){
        
        return $this->hasMany(Partidos::class);
    }
}
