@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    @foreach ($miescuderiaconpilotos as $escuderia )
    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 title-info text-center">
                    <h3>{{$escuderia['nombre']}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">

                    <img class="img-miescuderia"
                        src="{{asset('')}}storage/images/escuderia/{{$escuderia->escudo}}">

                </div>
                <div class="miescuderia-pilotos col-sm-2">
                    @foreach ($piloto1 as $pilotos )
                    <h4>Piloto 1</h4>
                   {{$pilotos['givenName'];}}
                   {{$pilotos['familyName'];}}

                    @endforeach
                    @foreach ($piloto2 as $pilotos )
                    <h4>Piloto 2</h4>
                   {{$pilotos['givenName'];}}
                   {{$pilotos['familyName'];}}

                    @endforeach
                    <h4>Constructor</h4>
                   {{$escuderia->constructors->nombre}}

                </div>
                <div class="col-lg-2 col-md-12 col-xs-12 col-sm-12" style="float: right;">
                    @if($escuderia['puntos'] != 0)
                    <h1 class="miescuderia-puntos">{{$escuderia['puntos']}}<span class="pts">pts</span></h1>
                    @else
                    <h1 class="miescuderia-puntos">{{$puntosescuderia}}<span class="pts">pts</span></h1>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom">
                </div>
            </div>
        </div>
    </section>
    @endforeach
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
