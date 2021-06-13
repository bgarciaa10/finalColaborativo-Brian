<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEstudiante extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => [
                'required',
            ],
            'apellido' => [
                'required',
            ],
            'no_telefono' => [
                'required', 'min:8'
            ],
            'grado' => [
                'required',
            ],
            'genero_id_genero' => [
                'required',
            ],
        ];
    }
}
