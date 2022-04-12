<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public $timestamps = false;

    //Relacion uno a muchos (inversa)
    public function equipo1(){
        return $this->belongsTo(Equipo::class, 'id_equipo1');
    }

    public function equipo2(){
        return $this->belongsTo(Equipo::class, 'id_equipo2');
    }

}
