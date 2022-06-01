@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="section-escuderia">
        <svg class="fondoescuderia" viewBox="10 10 190 180" xmlns="http://www.w3.org/2000/svg">
            <path fill="#E10600"
                d="M38.5,-68.5C47.3,-61.5,50.3,-46.1,59.4,-33.3C68.5,-20.5,83.7,-10.3,85.6,1.1C87.6,12.5,76.2,25,65.2,34.4C54.1,43.7,43.3,50,32.5,59.2C21.7,68.4,10.8,80.5,1.2,78.4C-8.4,76.3,-16.9,60.1,-30.2,52.3C-43.4,44.6,-61.5,45.3,-67.3,37.9C-73,30.6,-66.5,15.3,-66.1,0.2C-65.8,-14.9,-71.7,-29.8,-66.2,-37.7C-60.8,-45.6,-44.1,-46.5,-31.1,-51.1C-18.2,-55.7,-9.1,-64.2,2.8,-69.1C14.8,-74,29.6,-75.4,38.5,-68.5Z"
                transform="translate(100 100)" />
        </svg>
        <div class="contenedor-formulario">
            <form class="form-esc">
                <h1 class> Crea tu Escudería</h1>
                <div class="row">
                    <div class="col-sm-12 padding-top-bottom padding-left-right padding-bottom-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" id="nombre">
                        </div>
                    </div>
                    <div class="col-sm-6 padding-left padding-bottom-5">
                        <select class="selectpicker">
                            <option>Alonso</option>
                            <option>Spain</option>
                            <option>Italy</option>
                        </select>
                    </div>
                    <div class="col-sm-6 padding-right  padding-bottom-5">
                        <select class="selectpicker">
                            <option>Alonso</option>
                            <option>Spain</option>
                            <option>Italy</option>
                        </select>
                    </div>
                    <div class="col-sm-6 padding-left ">
                        <select class="selectpicker">
                            <option>Alpine</option>
                            <option>Spain</option>
                            <option>Italy</option>
                        </select>
                    </div>
                    <div class="col-sm-6 padding-right padding-bottom-5 ">
                        <input type="file" class="form-control" placeholder="escudo">
                    </div>
                </div>
                <div class="text-center padding-bottom-5">
                    <button class="btn btn-green">Entrar</button>
                </div>
            </form>
        </div>
    </section>

    {{-- SECTION 2 --}}


    {{-- SECTION 3 --}}


    {{-- SECTION 4 --}}
@endsection
