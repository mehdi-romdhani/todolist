<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [ // ON RETOURNE LE NOM DES CHAMPS DU FORMULAIRE SOUS FORME
            // DE TABLEAU ASSOCIATIF

            "username" => 'bail|required|between:5,20|alpha',
            "password" => 'bail|required'

        ];
    }
}
