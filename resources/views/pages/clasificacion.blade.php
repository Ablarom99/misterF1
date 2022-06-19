@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 text-center title-info2">
                    <h3>Clasificación<span style="font-family: ethnocentric;">Mister</span><span
                            style="font-family: protos; color:#e10600;">F1</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 padding-top-bottom text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Posición</th>
                                <th>Escudo</th>
                                <th>Escudería</th>
                                <th>Usuario</th>
                                <th>Puntuación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($escuderiasclasi as $escuderia)
                                <tr>
                                    <td class="text-left">@php if($i == 1){
                                        echo '<i class="text-red numero fa-solid fa-star"></i>';
                                        }else{
                                            echo '<span class="numero">#'.$i.'</span>';
                                            }  @endphp</td>
                                    <td class="text-left"><img alt="imagen escuderia" class="img-escuderia-clasi"
                                            src="{{ asset('') }}storage/images/escuderia/{{ $escuderia->escudo }}"></td>
                                    <td class="text-left">{{ $escuderia->nombre }}</td>
                                    <td class="text-left">{{ $escuderia->users->nickname }}</td>
                                    <td class="text-left">{{ $escuderia->puntos }}</td>
                                    @php $i++ @endphp

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 text-center">


                            {!! $escuderiasclasi->links() !!}

                        </div>
                    </div>

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
