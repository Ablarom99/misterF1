@extends('layouts.custom-register')

@section('content')
    <div class="container no-margin">
        <div class="row">
            <div class="form-login">
                <a href="{{route('home')}}"> <h1 class="no-margin padding-top-bottom"><span style="font-family: ethnocentric;">Mister</span><span
                    style="font-family: protos; color:#e10600;">F1</span></h1></a>
                 <h3 class="no-margin">Crear cuenta nueva</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-12 padding-top-bottom padding-left-right">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Nombre" id="nombre">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="E-mail" id="email">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Usuario" id="user">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20 padding-left-right">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Contraseña" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="text-right padding-top-bottom padding-right">
                        <button class="btn btn-green">Crear</button>
                    </div>
                    <div class="form-link col-sm-12 padding-top-bottom padding-left-right">
                        <h5>¿Ya tienes cuenta? <a href="{{route('login')}}">Inicia sesión</a></h5>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
