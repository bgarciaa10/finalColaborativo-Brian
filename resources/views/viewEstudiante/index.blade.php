@extends('app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Clientes
            </div>
            <div class="card-body">

                <table class="table table-striped">

                    @if(count($joinDatosEnviados))
                        <thead>
                        <tr class="text-center" >

                            <th scope="col">{{__('Nombres')}}</th>
                            <th scope="col">{{__('Apellidos')}}</th>
                            <th scope="col">{{__('No. de Teléfono')}}</th>
                            <th scope="col">{{__('Grado')}}</th>
                            <th scope="col">{{__('Genero')}}</th>
                            <th scope="col">{{__('Editar')}}</th>
                            <th scope="col">{{__('Eliminar')}}</th>
                        </tr>

                        </thead>
                    @endif
                    <tbody>
                    @forelse($joinDatosEnviados as $clients)
                        <tr class="text-center">

                            <td>{{$clients->nombre}}</td>
                            <td>{{$clients->apellido}}</td>
                            <td>{{$clients->no_telefono}}</td>
                            <td>{{$clients->grado}}</td>
                            <td>{{$clients->nombre_genero}}</td>

                            <td>
                                <a href="#">
                                    <button type="button" class="btn btn-outline-success">{{__('Editar')}}</button>
                                </a>
                            </td>
                            <td>
                                <form id="delete-client-" action="" method="POST" class="     sweetalert-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">{{__('Eliminar')}}</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <p class="text-center">No existe registros</p>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
            </div>
        </div>

    </div>

@endsection
