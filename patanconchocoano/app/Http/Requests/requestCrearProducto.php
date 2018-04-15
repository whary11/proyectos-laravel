<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestCrearProducto extends FormRequest
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
            'producto' => ['required', 'max:80'],
            'desproduct' => ['required', 'max:190']

        ];
    }
    public function messages()
    {
        return [
            'producto.required' => 'Por favor, escribe un nombre para el producto.',
            'producto.max' => 'El nombre no puede superar los 80 caracteres.',
            'desproduct.required' => 'Por favor, escribe una pequeña descripción',
            'desproduct.max' => 'La descripción no puede superar los 190 caracteres.'
        ];
    }
}
