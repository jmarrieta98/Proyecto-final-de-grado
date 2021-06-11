<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePreinscripcion extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha-nacimiento' => 'required|string',
            'nombre-tutor' => 'required|string|max:255',
            'telefono' => 'required|max:20',
        ];
    }

    public function attributes()
    {
        return parent::attributes();
    }

    public function messages()
    {
        return parent::messages();
    }
}
