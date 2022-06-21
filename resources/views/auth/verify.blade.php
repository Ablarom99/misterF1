@extends('layouts.custom-register')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{route('home')}}"> <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span></h1></a>
                 <h3 class="no-margin padding-20">Verificación de Correo Electrónico</h3>
                 <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('¡Se ha enviado un email de verificación!') }}
                        </div>
                    @endif

                    Verica tu email para poder acceder a todas las características de <span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span><br>
                    {{ __('¿No has recibido el email?') }},
                    <form class="d-inline padding-20" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-red ">{{ __('Reenviar') }}</button>
                    </form>
                </div>
                <div class="form-link col-sm-12  padding-left-right">
                </div>
            </div>
        </div>
    </div>
@endsection



