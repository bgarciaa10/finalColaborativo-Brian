<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEstudiante;
use App\Models\ModelEstudiante;
use App\Models\ModelGenero;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ControllerEstudiante extends Controller
{
    public function index(){

        $joinDatosEnviados = ModelEstudiante::
        join('genero','estudiante.genero_id_genero','genero.id_genero')->
        select('estudiante.nombre','estudiante.apellido',
            'estudiante.no_telefono','estudiante.grado',
            'genero.nombre_genero'
        )->get();
        return view('viewEstudiante.index', compact('joinDatosEnviados'));

    }

    public function create(){

        $varGenero = ModelGenero::all();
        return view('viewEstudiante.create', compact('varGenero'));
    }


    public function store(RequestEstudiante $request){

        $data = $request->validated();
        $varCorreo = ModelEstudiante::create($data);
        //return back()->with('status', 'ok');
        return redirect()->route('estudiante.create')->with('status', 'ok');
    }
}
