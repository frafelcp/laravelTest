<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImpuestoFormRequest extends FormRequest
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
            'porcentaje' => 'required',
            'descripcion' => 'required|max:50',
            'estado' => 'required|max:5',
        ];
    }
}
