@extends('app')

@section('content')

    <div class="container" id="form">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

    <!-- Validacion para mostrar SweetAlert -->
        @if(session('status') == 'ok')

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




    </div>
@endsection
