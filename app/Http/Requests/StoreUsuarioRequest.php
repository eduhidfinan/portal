<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'genero' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'celular' => 'required',
            'id_tipo' => 'required'
        ];
    }
}
