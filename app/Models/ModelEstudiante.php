<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstudiante extends Model
{
    protected $table = "estudiante";

    public $timestamps = false;

    protected $fillable = [
        "id_estudiante", "nombre", "apellido", "no_telefono", "grado", "genero_id_genero"
    ];

    protected $primaryKey = "id_estudiante";
}
