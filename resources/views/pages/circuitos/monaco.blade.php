@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}

    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 title-info">
                    <h3>GP de Mónaco</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 ">
                    <h4>Primer Gran Premio</h4>1950
                    <h4>Número de Vueltas</h4>78
                    <h4>Longitud del Circuito</h4>3,337 km
                    <h4>Distancia por Vuelta</h4>260,286 m
                    <h4>Chassis</h4> F1-75
                    <h4>Vuelta Record</h4> 1:12.909
                    <h4>Piloto Record</h4> Lewis Hamilton (2021)
                </div>
                <div class="col-sm-6">
                    <img class="img-piloto"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Monte_Carlo_Formula_1_track_map.svg/1280px-Monte_Carlo_Formula_1_track_map.svg.png">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom">
                    <h3>GP Mónaco</h3>
                    El Gran Premio de Mónaco es una carrera de automovilismo que se disputa anualmente con monoplazas en el
                    circuito de Mónaco del principado de Mónaco. Es uno de los grandes premios más antiguos y prestigiosos
                    de Fórmula 1. El fundador de este circuito fue Antony Noghès, y a pesar de que este se terminó de
                    construir en el año 1920, no fue hasta 1929 que se corrió la primera carrera. La edición 1933 de la
                    carrera fue el primer Gran Premio de la historia del automovilismo en que la parrilla de salida se
                    determinó según los tiempos de vuelta marcados en las sesiones de entrenamientos, en vez de por sorteo.
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
                    d="M0,32L60,69.3C120,107,240,181,360,202.7C480,224,600,192,720,170.7C840,149,960,139,1080,122.7C1200,107,1320,85,1380,74.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>

            @include('layouts.includes.footer')
        </div>
    </section>
@endsection
