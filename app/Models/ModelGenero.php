<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGenero extends Model
{
    protected $table = "genero";

    public $timestamps = false;

    protected $fillable = [
        "id_genero", "nombre_genero",
    ];

    protected $primaryKey = "id_genero";
}
