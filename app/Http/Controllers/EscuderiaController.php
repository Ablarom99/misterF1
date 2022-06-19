<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Piloto;
use App\Models\Constructor;
use App\Models\Escuderia;
use App\Models\User;
use App\Http\Controllers\Auth\VerificationController;
class EscuderiaController extends Controller
{
    public function index()
    {
        // $pilotos = HTTP::get('http://ergast.com/api/f1/2022/drivers.json');
        // $pilotosarray = $pilotos->json();
        // $pilotos = $pilotosarray['MRData']['DriverTable']['Drivers'];



        if(\DB::table('escuderias')->where('user_id', Auth()->user()->id)->exists()){
            return redirect()->route('miescuderia');
        }else{
            $pilotos = Piloto::orderBy('nombre', 'ASC')->get();
            $constructors = Constructor::orderBy('nombre', 'ASC')->get();
            return view('pages.crearescuderia', compact('pilotos', 'constructors'));
        }

    }
    public function store(Request $request){

        $request->validate([


            'nombre'=>'required |unique:escuderias',
            'escudo'=>'image',
        ]);

        try{
            $newescuderia = new Escuderia();
            $newescuderia->nombre = $request->nombre;
            $newescuderia->constructor_id = $request->constructor;
            $newescuderia->puntos = 0;

            if($request->fotoescudo!=null){
                $fotoescudo=time()."_".$request->file('fotoescudo')->getClientOriginalName();
                $newescuderia->escudo=$fotoescudo;
                $request->file('fotoescudo')->storeAs('public/images/escuderia', $fotoescudo);
            }
            $newescuderia->user_id = Auth()->user()->id;
            $newescuderia->save();

            $editescuderia = Escuderia::find($newescuderia->id);

            $editescuderia->pilotos()->attach($request->piloto1);
            $editescuderia->pilotos()->attach($request->piloto2);

            $editescuderia->save();
        }
        catch(QueryException $exception){
            return route('crearescuderia.index');
        }

        return redirect()->route('miescuderia');
    }

    public function loadmiescuderia(){
        // Comprobar si ya tiene una escudería creada
        if(!\DB::table('escuderias')->where('user_id', Auth()->user()->id)->exists()){
            return EscuderiaController::index();
        }else{
            // Si ya tiene una rescatar los datos
            $idescuderia = Escuderia::select('id')->where('user_id', Auth()->user()->id)->get();
            $miescuderiaconpilotos = Escuderia::with('pilotos')->findOrFail($idescuderia);
            $pilotos = Escuderia::with('pilotos')->findOrFail($idescuderia)->first();
            $i = 0;
            // Rescatar datos de los pilotos
            foreach($pilotos->pilotos as $piloto ){
                $i++;
                $pilotosapi = HTTP::get('http://ergast.com/api/f1/drivers/'.$piloto->api_id.'.json');
             $pilotosarray = $pilotosapi->json();
             $pilotosapi1 = $pilotosarray['MRData']['DriverTable']['Drivers'];
                if($i<=1){
                    $piloto1 = $pilotosapi1;
                }else{
                    $piloto2 = $pilotosapi1;
                }
            }
            foreach ($piloto1 as $piloto){
                $piloto1id = $piloto['driverId'];
            }
            foreach ($piloto2 as $piloto){
                $piloto2id = $piloto['driverId'];
            }
            // Preguntar a la api los puntos de cada piloto
            $consultapuntos = HTTP::get('https://ergast.com/api/f1/current/driverStandings.json');
            $consultaarray = $consultapuntos->json();
            $puntosapi = $consultaarray['MRData']['StandingsTable']['StandingsLists']['0']['DriverStandings'];
            $j = 0;
            $puntosescuderia = 0;
            $guardarpuntos = Escuderia::find($idescuderia)->first();
            do{
                foreach($puntosapi as $puntos){

                    if($puntos['Driver']['driverId'] == $piloto1id || $puntos['Driver']['driverId'] == $piloto2id  ){
                        $puntosescuderia += $puntos['points'];
                        $j++;
                    }
                }
            }while($j<2);

            // Preguntar a la api los puntos del constructor
            $constpuntos = HTTP::get('http://ergast.com/api/f1/current/constructorStandings.json');
            $constarray = $constpuntos->json();
            $puntosconst = $constarray['MRData']['StandingsTable']['StandingsLists']['0']['ConstructorStandings'];
            foreach($puntosconst as $puntosconstructor){

                if($puntosconstructor['Constructor']['constructorId'] == $guardarpuntos->constructors->api_id){
                    $puntosescuderia += $puntosconstructor['points'];
                }
            }

            // Guardar los puntos en las base de datos

        $guardarpuntos->puntos = $puntosescuderia;
        $guardarpuntos->save();

            return view('pages.miescuderia',compact('miescuderiaconpilotos', 'piloto1', 'piloto2', 'puntosescuderia'));
        }

        }

        public function datosescuderia($id){
        $escuderias = HTTP::get('http://ergast.com/api/f1/2022/constructors.json');
        $escuderiasarray = $escuderias->json();
        $escuderias = $escuderiasarray['MRData']['ConstructorTable']['Constructors'];
        foreach($escuderias as $escuderia){
            if($escuderia['constructorId'] == $id ){
                $datosescuderia['id'] = $escuderia['constructorId'];
                $datosescuderia['nombre'] = $escuderia['name'];
                $datosescuderia['nacionalidad'] = $escuderia['nationality'];
                $datosescuderia['url'] = $escuderia['url'];
            }
        }
        return view('pages.escuderias.escuderiainfo', compact('datosescuderia'));
        }
    }



