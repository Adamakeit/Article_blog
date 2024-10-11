<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articlerequest extends FormRequest
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
            'titre' => 'required|min:3',
            'descriptions' => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire',
            'titre.min' => 'Le titre doit comporter au minimum 3 caractères',
            'descriptions.required' => 'La description est obligatoire',
            'descriptions.min' => 'La description doit comporter au minimum 10 caractères',
        ];
    }
}
