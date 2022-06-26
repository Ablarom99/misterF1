<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuderia;



class ClasificacionController extends Controller
{
    public function index(){
        $escuderiasclasi = Escuderia::orderBy('puntos', 'DESC')->paginate(10);
        return view('pages.clasificacion', compact('escuderiasclasi'));

    }
}
