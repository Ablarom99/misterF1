@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>Editar {{$edituser->name}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12  padding-20 text-center">
                    {{--  --}}
                    <form method="PUT" action="{{ route('userupdate', $edituser->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 padding-top-bottom padding-left-right">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $edituser->name }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-20 padding-left-right">
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $edituser->email }}" required autocomplete="email">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-20 padding-left-right">
                                <div class="form-group">
                                    <input id="nickname" type="text" placeholder="Usuario" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ $edituser->nickname }}" required autocomplete="nickname" autofocus>
                                </div>
                            </div>


                            </div>
                            <div class="col-sm-6  padding-20 padding-left-right" style="width: 0%">
                                <select  id="rol" name="rol" class="selectpicker">
                                        <option value="user" name="user">Usuario</option>
                                        <option value="editor" name="editor">Editor</option>
                                        <option value="admin" name="admin">Administrador</option>
                                </select>
                            </div>
                            <div class="col-sm-12  padding-20 padding-left-right" style="width: 100%">
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
                            </div>

                        </div>


                        <div class="text-right padding-20 padding-right">
                            <button type="submit" class="btn btn-red">Actualizar</button>
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
