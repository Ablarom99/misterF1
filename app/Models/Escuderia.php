<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuderia extends Model
{
    use HasFactory;




    // Relación de Uno a uno

    public function noticia(){
        return $this->hasOne('App\Models\Constructor');
    }

    //Relación de muchos a muchos

    public function pilotos(){
        return $this->belongsToMany('App\Models\Pilotos');
    }
}
