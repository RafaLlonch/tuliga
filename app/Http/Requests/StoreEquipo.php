<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //logica que verifica que el usuario tiene permisos
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
            'nombre_equipo' => 'required|max:50',
            'entrenador' => 'required|max:50',
            'presidente' => 'required|max:50',
            'anio_fundacion' => 'required|max:4',
            'localidad' => 'required|max:50',
            'provincia' => 'required|max:50',
            'campo' => 'required|max:50'
        ];
    }

    //funcion que cambia el nombre del atributo
    public function attributes()
    {
        return [
            'nombre_equipo' => 'nombre'
        ];
    }

    //funcion que cambia el nombre del mensaje
    public function messages()
    {
        return [
            'entrenador.required' => 'El campo es obligatorio'
        ];
    }
}
