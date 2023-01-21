<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *      'name' => 'required | max :50',
     *      'descripcion' => 'required | min:10',
     *      'categoria' => 'required'
     * @return array
     */
    public function rules()
    {
        return [
            'nomAlumno' => 'required | max :50'
        ];
    }

    public function attributes()
    {
        return [
            'nomAlumno' => 'nombre del alumno',
        ];
    }

    public function messages()
    {
        return [
            'descripcion' => 'Debe ingresar una descripción para el curso'
        ];
    }
}
