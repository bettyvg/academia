<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
                //Validación de campos registro de usuarios al sistema

                'correo' => 'required|unique:usuarios,correo_electronico',



            ];

    }

    public function messages()
    {
        return [
            'correo.unique' => 'El correo ya esta en uso',
            'extension.numeric' => 'El campo solo acepta numeros',

        ];
    }


}
