@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 title-info">
                    <h3>Ferrari</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <img class="img-escuderia"
                        src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/logo.img.jpg/1521797474166.jpg">
                </div>
                <div class="col-sm-2 ">

                    <h4>Full Team Name</h4> Scuderia Ferrari
                    <h4>Base Maranello</h4> Italy
                    <h4>Team Chief</h4> Mattia Binotto
                    <h4>Technical Chief</h4> Enrico Cardile / Enrico Gualtieri
                    <h4>Chassis</h4> F1-75
                </div>
                <div class="col-sm-2 ">
                    <h4>Power Unit</h4> Ferrari
                    <h4>First Team Entry</h4> 1950
                    <h4>World Championships</h4> 16
                    <h4>Highest Race Finish</h4> 1 (x241)
                    <h4>Pole Positions</h4> 234
                    <h4>Fastest Laps</h4> 256
                </div>
                <div class="col-sm-6">
                    <img class="img-piloto" src="https://a.espncdn.com/photo/2021/0226/r819851_1296x729_16-9.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom">
                    <h3>Escudería Ferrari</h3>
                    Scuderia Ferrari es la división deportiva (Gestione Sportiva) de automóviles Ferrari encargada de las competiciones de Fórmula 1. Ferrari Corse Clienti se encarga desde hace poco de casi todas las otras actividades deportivas de la compañía y la atención a equipos privados.

                        La primera participación de Ferrari en Fórmula 1 fue en el Gran Premio de Mónaco de 1950, con el Tipo 125 F1. Ferrari es considerado uno de los cuatro grandes equipos de Fórmula 1, junto con Williams, McLaren y Mercedes.7​ Es el equipo activo más antiguo del campeonato, y es el que ha conseguido más victorias, campeonatos de pilotos (15) y campeonatos de constructores (16). Ha contado con muchos de los pilotos más destacados de la historia de la Fórmula 1 como Michael Schumacher, Niki Lauda, Juan Manuel Fangio, Alain Prost, Nigel Mansell, Gilles Villeneuve, Kimi Räikkönen, Sebastian Vettel y Fernando Alonso, entre otros. Los pilotos actuales son Charles Leclerc y Carlos Sainz Jr.. El director del equipo es Mattia Binotto.

                        En sport prototipos y gran turismos, Ferrari ha obtenido nueve victorias absolutas en las 24 Horas de Le Mans, ocho en la Mille Miglia y siete en la Targa Florio; además ha conquistado múltiples títulos de constructores en el Campeonato Mundial de Resistencia.
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION 2 --}}


    {{-- SECTION 3 --}}


    {{-- SECTION 4 --}}


    <section>
        <div class="waves">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f5f5f8" fill-opacity="1"
                    d="M0,256L40,234.7C80,213,160,171,240,133.3C320,96,400,64,480,90.7C560,117,640,203,720,224C800,245,880,203,960,192C1040,181,1120,203,1200,202.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>

            @include('layouts.includes.footer')
        </div>
    </section>
@endsection
