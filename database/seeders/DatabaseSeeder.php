<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Constructor;
use App\Models\Piloto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $pilotos = HTTP::get('http://ergast.com/api/f1/2022/drivers.json');
        $pilotosarray = $pilotos->json();
        $pilotos = $pilotosarray['MRData']['DriverTable']['Drivers'];
        foreach ($pilotos as $piloto){
            $pilotodb = [
                'nombre' => $piloto['familyName'],
                'numero' => $piloto['permanentNumber'],
                'api_id' => $piloto['driverId'],
                'nacionalidad' => $piloto['nationality'],
            ];
            $piloto = new Piloto($pilotodb);
            $piloto->save();
        }


        $constructores = HTTP::get('http://ergast.com/api/f1/2022/constructors.json');
        $constructoresarray = $constructores->json();
        $constructores = $constructoresarray['MRData']['ConstructorTable']['Constructors'];
        foreach ($constructores as $constructor){
            $constructordb = [
                'nombre' => $constructor['name'],
                'api_id' => $constructor['constructorId'],
                'nacionalidad' => $constructor['nationality'],
            ];
            $constructor = new Constructor($constructordb);
            $constructor->save();
        }
    }
}
