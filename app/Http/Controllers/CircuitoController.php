<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CircuitoController extends Controller
{
    public function index($round){
        // Consultar información Piloto
        $circuitos = HTTP::get('http://ergast.com/api/f1/2022/'.$round.'/circuits.json');
        $circuitosarray = $circuitos->json();
        $circuitos = $circuitosarray['MRData']['CircuitTable']['Circuits'];
        return view('pages.circuitos.circuitoinfo', compact('circuitos'));
    }
}
