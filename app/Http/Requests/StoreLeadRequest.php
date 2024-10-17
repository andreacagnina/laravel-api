<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|email|max:50',
            'message' => 'required|max:500',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome obbligatorio',
            'surname.required' => 'Cognome obbligatorio',
            'email.required' => 'Email obbligatorio',
            'email.email' => 'Formato non accettato',
            'message.required' => 'Contenuto obbligatorio',
            'name.max' => 'Superato il numero massimo di caratteri :max',
            'surname.max' => 'Superato il numero massimo di caratteri :max',
            'email.max' => 'Superato il numero massimo di caratteri :max',
            'message.max' => 'Superato il numero massimo di caratteri :max',
        ];
    }
}
