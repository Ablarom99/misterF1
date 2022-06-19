@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 flex-center">
                    <h1 class="">Circuitos</h1>
                </div>
            </div>
            <div class="row">
                <div class="contenedor-pilotos ">
                    <a  href="{{('circuito/3')}}"><img title="albert_park" alt="albert_park" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/albert_park.png')}}"></a>
                    <a href="{{('circuito/19')}}"><img title="americas" alt="americas" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/americas.png')}}"></a>
                    <a href="{{('circuito/1')}}"><img title="bahrain" alt="bahrain" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/bahrain.png')}}"></a>
                    <a href="{{('circuito/8')}}"><img title="baku" alt="baku" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/baku.png')}}"></a>
                    <a href="{{('circuito/6')}}"><img title="catalunya" alt="catalunya" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/catalunya.png')}}"></a>
                    <a href="{{('circuito/13')}}"><img title="hungaroring" alt="hungaroring" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/hungaroring.png')}}"></a>
                    <a href="{{('circuito/4')}}"><img title="imola" alt="imola" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/imola.png')}}"></a>
                    <a href="{{('circuito/21')}}"><img title="interlagos" alt="interlagos" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/interlagos.png')}}"></a>
                    <a href="{{('circuito/2')}}"><img title="jeddah" alt="jeddah" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/jeddah.png')}}"></a>
                    <a href="{{('circuito/17')}}"><img title="marina_bay" alt="marina_bay" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/marina_bay.png')}}"></a>
                    <a href="{{('circuito/5')}}"><img title="miami" alt="miami" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/miami.png')}}"></a>
                    <a href="{{('circuito/7')}}"><img title="monaco" alt="monaco" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/monaco.png')}}"></a>

                </div>
                    <div class="ui-pagination mt-50">
                        <h2 class="text-center heading-separator"></h2>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="pagination">

                                    <li><a href="{{route('circuitos')}}">1</a></li>
                                    <li><a href="{{route('circuitos2')}}">2</a></li>

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
