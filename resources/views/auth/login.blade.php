@extends('layouts.custom-login')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{route('home')}}"> <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span></h1></a>
                 <h3 class="no-margin">Inicio de Sesión</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                              <label for="email">E-mail:</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                              <label for="name">Password:</label>
                              <input type="password" class="form-control" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="text-right padding-top-bottom padding-right">
                        <button class="btn btn-green">Entrar</button>
                    </div>
                    <div class="form-link col-sm-12 padding-top-bottom padding-left-right">
                        <h5>¿Has olvidado tu <a href="#">contraseña</a>?</h5>
                        <h5>¿Aún no tienes cuenta?<a href="{{route('register')}}">Regístrate</a></h5>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
