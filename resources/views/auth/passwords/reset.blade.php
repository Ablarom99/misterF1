@extends('layouts.custom-login')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{ route('home') }}">
                    <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                            style="font-family: protos; color:#e10600;">F1</span></h1>
                </a>
                <h3 class="no-margin">Elige tu nueva contraseña</h3>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-sm-12 padding-20 padding-left-right">
                            <div class="form-group">
                            <label for="password">Contraseña:</label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
</div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col-sm-12 padding-20 padding-left-right">
                            <div class="form-group">
                            <label for="password"> Repetir Contraseña:</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
                        </div>


                    </div>
                    <div class="text-right padding-20 padding-right">
                    <button type="submit" class="btn btn-red">
                                    {{ __('Enviar') }}
                                </button>
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
                <div class="form-link col-sm-12 padding-20 padding-left-right">
                    <h5>¿Aún no tienes cuenta?<a href="{{ route('register') }}">Regístrate</a></h5>
                </div>
            </div>
        </div>
    </div>
@endsection






