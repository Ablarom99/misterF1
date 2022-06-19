<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'constructors';
    protected $primaryKey = 'id';
    public $timestamps = 'true';

    protected $fillable = [
        'nombre',
        'api_id',
        'nacionalidad',
    ];
    public function escuderias(){
        return $this->hasMany('App\Models\Escuderia');
    }
}
