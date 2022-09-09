<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCursoRequest extends FormRequest
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


    public function rules()
    {
        return [

            'nombre'=>'required|max: 30',
            'descripcion'=>'required|max: 60',
            'duracion'=>'required|integer',
            'imagen'=>'required|image'
        ];
    }
}
