@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 flex-center">
                    <h1 class="">Pilotos</h1>
                </div>
            </div>
            <div class="row">
                <div class="contenedor-pilotos ">
                    <a href="{{('piloto/albon')}}"><img title="albon" alt="albon" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/albon.jpg')}}"></a>
                    <a href="{{('piloto/alonso')}}"><img title="alonso" alt="alonso" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/alonso.jpg')}}"></a>
                    <a href="{{('piloto/bottas')}}"><img title="bottas" alt="bottas" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/bottas.jpg')}}"></a>
                    <a href="{{('piloto/gasly')}}"><img title="gasly" alt="gasly" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/gasly.jpg')}}"></a>
                    <a href="{{('piloto/zhou')}}"><img title="zhou" alt="zhou" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/zhou.jpg')}}"></a>
                    <a href="{{('piloto/hamilton')}}"><img title="hamilton" alt="hamilton" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/hamilton.jpg')}}"></a>
                    <a href="{{('piloto/hulkenberg')}}"><img title="hulkenberg" alt="hulkenberg" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/hulkenberg.jpg')}}"></a>
                    <a href="{{('piloto/latifi')}}"><img title="latifi" alt="latifi" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/latifi.jpg')}}"></a>
                    <a href="{{('piloto/leclerc')}}"><img title="leclerc" alt="leclerc" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/leclerc.jpg')}}"></a>
                    <a href="{{('piloto/kevin_magnussen')}}"><img title="kevin_magnussen" alt="kevin_magnussen" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/kevin_magnussen.jpg')}}"></a>
                    <a href="{{('piloto/norris')}}"><img title="norris" alt="norris" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/norris.jpg')}}"></a>
                    <a href="{{('piloto/ocon')}}"><img title="ocon" alt="ocon" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/ocon.jpg')}}"></a>

                </div>
                    <div class="ui-pagination mt-50">
                        <h2 class="text-center heading-separator"></h2>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="pagination">

                                    <li><a href="{{route('pilotos')}}">1</a></li>
                                    <li><a href="{{route('pilotos2')}}">2</a></li>

                                </ul><!-- /.pagination -->
                            </div>
                        </div>
                    </div><!-- /.ui-pagination -->
            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom">

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
