<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuderia extends Model
{
    use HasFactory;
    protected $table = 'escuderias';
    protected $primaryKey = 'id';
    public $timestamps = 'true';

    protected $fillable = [
        'nombre',
        'escudo',
        'puntos',
        'user_id',
        'constructor_id'
    ];

    public function pilotos(){
        return $this->belongsToMany('App\Models\Piloto');
    }

        // de uno a muchos
    public function constructors(){
        return $this->belongsTo(Constructor::class, 'constructor_id');
    }
}
