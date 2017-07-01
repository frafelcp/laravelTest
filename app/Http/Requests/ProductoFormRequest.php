<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
          'codigo' => 'required|max:50',
          'nombre' => 'required|max:50',
          'stock' => 'required|max:11',
          'descripcion' => 'required|max:50',
          'estado' => 'max:10'
        ];
    }
}
