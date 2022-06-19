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
                    <a href="{{('piloto/perez')}}"><img title="perez" alt="perez" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/perez.jpg')}}"></a>
                    <a href="{{('piloto/ricciardo')}}"><img title="ricciardo" alt="ricciardo" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/ricciardo.jpg')}}"></a>
                    <a href="{{('piloto/russell')}}"><img title="russel" alt="russel" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/russell.jpg')}}"></a>
                    <a href="{{('piloto/sainz')}}"><img title="sainz" alt="sainz" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/sainz.jpg')}}"></a>
                    <a href="{{('piloto/mick_schumacher')}}"><img title="mick_schumacher" alt="mick_schumacher" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/mick_schumacher.jpg')}}"></a>
                    <a href="{{('piloto/stroll')}}"><img title="stroll" alt="stroll" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/stroll.jpg')}}"></a>
                    <a href="{{('piloto/tsunoda')}}"><img title="tsunoda" alt="tsunoda" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/tsunoda.jpg')}}"></a>
                    <a href="{{('piloto/max_verstappen')}}"><img title="max_verstappen" alt="max_verstappen" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/max_verstappen.jpg')}}"></a>
                    <a href="{{('piloto/vettel')}}"><img title="vettel" alt="vettel" class="img-pilotos text-center" src="{{asset('recursos/images/pilotos/vettel.jpg')}}"></a>
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
