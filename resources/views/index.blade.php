@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <h1><span style="font-family: ethnocentric;">Mister</span><span
                        style="font-family: protos; color:#e10600;">F1</span></h1>
                @guest

                <p>Regístrate y crea tu propia escudería</p>
                <a href="{{route('register')}}" class="btn btn-border">¡Regístrate!</a>

                @else
                <p>Entra en tú perfil para ver tus progresos.</p>
                <a href="{{route('miescuderia')}}" class="btn btn-border"><span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span></a>
                @endguest
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->


    {{-- SECTION 2 --}}
    <section class="site-section section-features padding-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 section-title no-margin">
                    <h2>¿Qué es MisterF1?</h2>
                    <p>MisterF1 es una aplicación que permite consultar información relacionada con el mundo de la Fórmula
                        1:</p>
                    <p> • Calendario de Carreras 2022. </p>
                    <p> • Circuitos. </p>
                    <p> • Pilotos. </p>
                    <p> • Escuderías. </p>
                    <p> • Noticias. </p>
                    <p> ⭐ El juego misterF1, basado en los juegos tipo “Fantasy”, crea tu propia escudería, elige dos
                        pilotos y un constructor y teniendo en cuenta los resultados reales asciende a lo más alto de la
                        clasificación global. </p>
                </div>
                <div class="col-sm-7 hidden-xs">
                    <img class="logoindex" src="{{ asset('recursos/images/logos/logo1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 --}}
    <section class="site-section section-services gray-bg text-center">
        <div class="container">
            <h2 class="heading-separator">¿Qué puedes hacer?</h2>
            <p class="subheading-text">MisterF1 proporciona información de todo lo relacionado con el mundo de la F1</p>
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="service">
                        <i class="fa-regular fa-calendar icono"></i>
                        <h3 class="service-title">Calendario de carreras</h3>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="service">

                        <i class="fa-solid fa-route icono"></i>
                        <h3 class="service-title">Circuitos</h3>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="service">
                        <svg class="icono2" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM230.7 367.5L156.4 272H48.61C56.17 371.4 133.7 451.3 232 462.6V369C231.6 368.6 231.1 368 230.7 367.5H230.7zM280 369V462.6C378.3 451.3 455.8 371.4 463.4 272H355.6L281.3 367.5C280.9 368 280.4 368.6 280 369H280zM352 224H461.6C446.2 124.3 359.1 48 256 48C152 48 65.84 124.3 50.45 224H160L167.2 209.7C172.6 198.8 183.7 192 195.8 192H316.2C328.3 192 339.4 198.8 344.8 209.7L352 224z"/></svg>
                        <h3 class="service-title">Pilotos</h3>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="service">

                        <i class="fa-solid fa-shield-halved icono"></i>
                        <h3 class="service-title">Escuderías</h3>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="service">

                        <i class="fa-solid fa-newspaper icono"></i>
                        <h3 class="service-title">Noticias</h3>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="service">

                        <i class="fa-solid fa-ranking-star icono"></i>
                        <h3 class="service-title">clasificación</h3>
                    </div><!-- /.service -->
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION 4 --}}

    <section class="site-section section-newsletter text-center">
        <div class="container">
            <h2>¿Quieres recibir noticias?</h2>
            <form action="send-email" method="POST" class="form-group newsletter-group">
                @csrf
                <input type="email" name="email" class="form-control" placeholder="Introduce tu email" required>
                <button class="btn btn-red" type="submit">Subscribirse</button>
            </form><!-- /.newsletter-group -->
        </div>
    </section><!-- /.section-newsletter -->

    @include('layouts.includes.footer')
@endsection
