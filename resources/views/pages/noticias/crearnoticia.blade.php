@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}

    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 title-info">
                    <h3 class="text-center">Nueva Noticia</h3>
                </div>
            </div>
            <div class="row flex-center">
                <div class="col-sm-7">
                    <form action="{{ route('crearnoticia.store') }}" method="POST" enctype="multipart/form-data" class="padding-bottom-5">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group padding-top-bottom">
                                  <input required type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" title="Título">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group padding-top-bottom">
                                  <input type="file" name="fotoportada" class="form-control" id="portada" title="Foto Portada">
                                </div>
                            </div>
                        </div>
                        <div class="form-group padding-top-bottom">
                          <textarea required class="form-control form-control-comment" name="contenido" id="contenido" placeholder="Contenido" title="Contenido"></textarea>
                        </div>
                        <div class="text-center padding-top-bottom">
                            <button type="submit" class="btn btn-red">Subir Noticia</button>
                        </div>
                    </form>
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
