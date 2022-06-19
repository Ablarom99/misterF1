<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function index($id){
        // Consultar información Piloto
        $pilotos = HTTP::get('http://ergast.com/api/f1/drivers/'.$id.'.json');
        $pilotosarray = $pilotos->json();
        $pilotos = $pilotosarray['MRData']['DriverTable']['Drivers'];
        $consultapuntos = HTTP::get('https://ergast.com/api/f1/current/driverStandings.json');
        $consultaarray = $consultapuntos->json();
        $puntosapi = $consultaarray['MRData']['StandingsTable']['StandingsLists']['0']['DriverStandings'];
        $puntospiloto = 0;
        foreach($puntosapi as $puntos){
            if($puntos['Driver']['driverId'] == $id){
                $puntospiloto += $puntos['points'];
                $wins = $puntos['wins'];
                $ranking = $puntos['position'];
            }
        }
        return view('pages.pilotos.pilotoinfo', compact('pilotos', 'puntospiloto', 'wins', 'ranking'));
    }
}
