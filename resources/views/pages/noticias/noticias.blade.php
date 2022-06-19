@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}

    <section class="separatop">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 title-info">
                    <h3 class="text-center">Noticias</h3>
                </div>
            </div>
            <div class="row article-center">
                <div class="col-md-12 article-center">
                    @foreach ($carganoticia as $noticia)
                        <article class="blog-post text-center">

                            <img src="{{ asset('') }}storage/images/noticias/{{ $noticia->portada }}" class=""
                                title="img Portada">

                            <div class="post-content">
                                <h3 class="post-title text-center">{{ $noticia->titulo }}</h3>
                                <p>{{ $noticia->contenido }}</p>


                            </div><!-- /.post-content -->
                        </article>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 title-info text-center">
                        {!! $carganoticia->links() !!}

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
