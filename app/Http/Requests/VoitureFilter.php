<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoitureFilter extends FormRequest
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
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
        'marque.required' => 'La marque est obligatoire.',
        'marque.string' => 'La marque doit être une chaîne de caractères.',
        'modele.required' => 'Le modèle est obligatoire.',
        'modele.string' => 'Le modèle doit être une chaîne de caractères.',
        ];
    }
}
