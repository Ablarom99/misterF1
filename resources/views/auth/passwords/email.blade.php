@extends('layouts.custom-login')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{ route('home') }}">
                    <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                            style="font-family: protos; color:#e10600;">F1</span></h1>
                </a>
                <h3 class="no-margin">¿Has olvidado tu contaseña?</h3>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="text-right padding-top-bottom padding-right">
                        <button type="submit" class="btn btn-red">
                            {{ __('Enviar') }}
                        </button>
                    </div>


                </form>
                <div class="form-link col-sm-12 padding-top-bottom padding-left-right">
                    <h5>¿Aún no tienes cuenta?<a href="{{ route('register') }}">Regístrate</a></h5>
                </div>
            </div>
        </div>
    </div>
@endsection




