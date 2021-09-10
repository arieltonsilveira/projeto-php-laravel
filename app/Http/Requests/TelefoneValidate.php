<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneValidate extends FormRequest
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
        if ($this->isMethod('POST')) {
            return [
                'telefone' => 'required|regex:/^\+[0-5]{1,3} [0-9]{2} [0-9]{5}-[0-9]{4}$/',
                'pessoa_id' => 'required|exists:App\Models\Pessoa,id',
            ];
        }

        //Falta Validar o PUT
        return [];
    }
}
