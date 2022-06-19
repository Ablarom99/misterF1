<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;
    protected $table = 'pilotos';
    protected $primaryKey = 'id';
    public $timestamps = 'true';

    protected $fillable = [
        'nombre',
        'numero',
        'api_id',
        'nacionalidad'
    ];

    public function escuderias(){
        return $this->belongsToMany('App\Models\Escuderia');
    }
}
