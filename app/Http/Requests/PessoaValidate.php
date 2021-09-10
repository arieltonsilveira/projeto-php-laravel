<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaValidate extends FormRequest
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
                'nome' => 'required|min:3',
                'cpf' => 'required|regex:/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/',
                'nascimento' => 'required|date_format:Y-m-d'
            ];
        }

        return [];
    }
}
