<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCuro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:3',
            'slug' => 'required|unique:cursos',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function messages():array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'slug.required' => 'El slug es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'categoria.required' => 'La categoria es obligatoria'
        ];
    }
}
