@extends('layouts.custom-index')

@section('content')
    {{-- SECTION 1 --}}
    <section class="separatop">
        <div class="container border-info">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>Panel de Administración</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12  padding-20 text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Nombre Escuderia</th>
                                <th>Editar-Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($cargauser as $usuario)
                                <tr>
                                    <td class="text-left">{{$usuario->name}}</td>
                                    <td class="text-left">{{$usuario->nickname}}</td>
                                    <td class="text-left">{{ $usuario->email }}</td>
                                    <td class="text-left">{{ $usuario->rol }}</td>
                                    @if ($usuario->escuderia != null)
                                    <td class="text-left">{{ $usuario->escuderia->nombre }}</td>
                                    @else
                                    <td class="text-left"></td>
                                    @endif
                                    <td class="text-center"><a href="{{route('useredit',$usuario)}}" class="btn btn-red btn-peque">Editar</a> <a href="{{route('userdelete',$usuario)}}" onclick="return confirm('Desea eliminar a {{$usuario->name}}')" class="btn btn-red btn-peque">Eliminar</a></td>
                                    @php $i++ @endphp

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 text-center">


                            {!! $cargauser->links() !!}

                        </div>
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
