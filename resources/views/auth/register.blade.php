@extends('layouts.custom-register')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{route('home')}}"> <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span></h1></a>
                 <h3 class="no-margin">Crear cuenta nueva</h3>
                 {{-- FORMULARIO  --}}
                 <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                                <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                                <input id="nickname" type="text" placeholder="Usuario" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('nickname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    <div class="text-right padding-top-bottom padding-right">
                        <button type="submit" class="btn btn-green"> Crear</button>
                    </div>
                </form>
                <div class="form-link col-sm-12  padding-left-right">
                    <h5>¿Ya tienes cuenta? <a href="{{route('login')}}">Inicia sesión</a></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
