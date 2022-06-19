<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $primaryKey = 'id';
    public $timestamps = 'true';

    protected $fillable = [
        'titulo',
        'contenido',
        'portada',
        'user_id'
    ];

       // de uno a muchos
       public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
