@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
@foreach ($circuitos as $circuito )


    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 text-center title-info2">
                    <h3>{{$circuito['circuitName']}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-piloto-info"
                        src="{{asset('recursos/images/circuitos/'.$circuito['circuitId'].'.png')}}">
                </div>
                <div class="col-sm-6 ">


                    <h4>Latitud</h4>{{$circuito['Location']['lat']}}
                    <h4>Longitud</h4>{{$circuito['Location']['long']}}
                    <h4>Ciudad</h4>{{$circuito['Location']['locality']}}
                    <h4>País</h4>{{$circuito['Location']['country']}}

                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom text-center">
                    <h4><a href="{{$circuito['url']}}">Más información...</a></h4>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION 2 --}}
    @endforeach

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
