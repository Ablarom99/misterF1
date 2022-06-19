@extends('layouts.custom-login')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{ route('home') }}">
                    <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                            style="font-family: protos; color:#e10600;">F1</span></h1>
                </a>
                <h3 class="no-margin">Inicio de Sesión</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                                <label for="name">Password:</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                            </div>
                        </div>
                    </div>
                    <div class="text-right padding-top-bottom padding-right">
                        <button type="submit" class="btn btn-red">Iniciar Sesión</button>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </form>
                <div class="form-link col-sm-12 padding-top-bottom padding-left-right">
                    <h5>¿Has olvidado tu <a href="{{route('password.request')}}">contraseña</a>?</h5>
                    <h5>¿Aún no tienes cuenta?<a href="{{ route('register') }}">Regístrate</a></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
