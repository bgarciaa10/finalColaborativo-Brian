@extends('app')

@section('content')

    <!-- Validacion para mostrar SweetAlert -->
    @if(session('status') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Estudiante Registrado',
                timer: 2500,
            })
        </script>

    @endif

    @if(session('status') == 'error')

        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error en el Registro',
                timer: 2500,
            })
        </script>
    @endif
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">

                <div class="card-header" style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                    Registro de Cliente
                </div>
                <div class="card-body">

                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul> @endif <form action="{{route('estudiante.store')}}" id="dynamic_form" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input class="form-control col-md-auto"  type="text"  name="nombre" id="name_client" value="{{old('nombre')}}" maxlength="50"
                                   required="required">
                            @if($errors->has('nombre'))
                                <p class="text-danger">{{$errors->first('nombre')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input class="form-control col-md-auto"  type="text"  name="apellido" id="apellido" value="{{old('apellido')}}" maxlength="50"
                                   required="required">
                            @if($errors->has('apellido'))
                                <p class="text-danger">{{$errors->first('apellido')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="no_telefono">No. de Teléfono</label>
                            <input class="form-control col-md-auto"  type="number"  name="no_telefono" id="no_telefono" value="{{old('no_telefono')}}" maxlength="8"
                                   required="required">
                            @if($errors->has('no_telefono'))
                                <p class="text-danger">{{$errors->first('no_telefono')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="grado">Grado</label>
                            <input class="form-control col-md-auto"  type="text"  name="grado" id="grado" value="{{old('grado')}}" maxlength="50"
                                   required="required">
                            @if($errors->has('grado'))
                                <p class="text-danger">{{$errors->first('grado')}}</p>
                            @endif
                        </div>

                            <div class="form-group">
                                <label for="genero_id_genero">Genero</label>
                                <select class="form-control" name="genero_id_genero" id="genero_id_genero" value="{{old('genero_id_genero')}}" required="required">

                                    @if(count($varGenero)>0)
                                        <option value="selected" > Seleccione Genero
                                        @foreach($varGenero as $categorys)
                                            <option value="{{$categorys->id_genero}}"> {{$categorys->nombre_genero}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay Generos disponibles</option>
                                    @endif
                                </select>
                            </div>


                        <div>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
