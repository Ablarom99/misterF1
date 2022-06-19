@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 flex-center">
                    <h1 class="">Escuderías</h1>
                </div>
            </div>
            <div class="row">
                <div class="contenedor-pilotos ">
                    <a  href="{{('escuderia/alfa')}}"><img title="alfa" alt="alfa" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/alfa.png')}}"></a>
                    <a href="{{('escuderia/alphatauri')}}"><img title="alphatauri" alt="alphatauri" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/alphatauri.png')}}"></a>
                    <a href="{{('escuderia/alpine')}}"><img title="alpine" alt="alpine" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/alpine.png')}}"></a>
                    <a href="{{('escuderia/aston_martin')}}"><img title="aston_martin" alt="aston_martin" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/aston_martin.png')}}"></a>
                    <a href="{{('escuderia/ferrari')}}"><img title="ferrari" alt="ferrari" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/ferrari.png')}}"></a>
                    <a href="{{('escuderia/haas')}}"><img title="haas" alt="haas" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/haas.png')}}"></a>
                    <a href="{{('escuderia/mclaren')}}"><img title="mclaren" alt="mclaren" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/mclaren.png')}}"></a>
                    <a href="{{('escuderia/mercedes')}}"><img title="mercedes" alt="mercedes" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/mercedes.png')}}"></a>
                    <a href="{{('escuderia/red_bull')}}"><img title="red_bull" alt="red_bull" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/red_bull.png')}}"></a>
                    <a href="{{('escuderia/williams')}}"><img title="williams" alt="williams" class="img-pilotos text-center" src="{{asset('recursos/images/escuderias/williams.png')}}"></a>


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
