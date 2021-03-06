<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaticaRequest extends FormRequest
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
            'curp' => 'required|unique:registroplatica,rfc|min:12|max:13',
            'telefono' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'curp.unique' => 'El rfc ya esta registrado',
            'curp.min' => 'El RFC tiene que tener una longitud de minimo 12 maximo 13',
            'curp.max' => 'El RFC tiene que tener una longitud de minimo 12 maximo 13',


        ];
    }

}
