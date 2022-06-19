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
                    <a href="{{('circuito/16')}}"><img title="monza" alt="monza" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/monza.png')}}"></a>
                    <a href="{{('circuito/11')}}"><img title="red_bull_ring" alt="red_bull_ring" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/red_bull_ring.png')}}"></a>
                    <a href="{{('circuito/12')}}"><img title="ricard" alt="ricard" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/ricard.png')}}"></a>
                    <a href="{{('circuito/20')}}"><img title="rodriguez" alt="rodriguez" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/rodriguez.png')}}"></a>
                    <a href="{{('circuito/10')}}"><img title="silverstone" alt="silverstone" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/silverstone.png')}}"></a>
                    <a href="{{('circuito/14')}}"><img title="spa" alt="spa" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/spa.png')}}"></a>
                    <a href="{{('circuito/18')}}"><img title="suzuka" alt="suzuka" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/suzuka.png')}}"></a>
                    <a href="{{('circuito/9')}}"><img title="villeneuve" alt="villeneuve" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/villeneuve.png')}}"></a>
                    <a href="{{('circuito/22')}}"><img title="yas_marina" alt="yas_marina" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/yas_marina.png')}}"></a>
                    <a href="{{('circuito/15')}}"><img title="zandvoort" alt="zandvoort" class="img-pilotos text-center" src="{{asset('recursos/images/circuitos/zandvoort.png')}}"></a>

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
