<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluacionCapaRequest extends FormRequest
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
            'nombre' => 'required',
            'correo' => 'required',
            'id_ejecutivo' => 'required',
            'curp' => 'required|unique:evaluacion,curp|min:18|max:18',
            'municipio' => 'required|numeric|min:50800|max:50999',
        ];
    }

    public function messages()
    {
        return [
            'correo.unique' => 'Este correo ya esta registrado',
            'curp.unique' => 'Este CURP ya esta registrado',
            'curp.min' => 'El CURP tiene que tener una longitud de minimo 18',
            'curp.max' => 'El CURP tiene que tener una longitud de maximo 18',

        ];
    }
}
