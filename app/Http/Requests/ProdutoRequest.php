<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()// verifica se o usuário esta autorizado ou não
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()// validação dos campos do formularios para preenchimento
    {
        //dd($this->request);
        return [
            'name'          =>'required|min:3|max:100',
            'number'        =>'required|numeric|max:99999',
            'category'      =>'required',
            'description'   =>'max:1500'
        ];
    }

    public function messages(){// mensagem de erros
        return[
            'name.required'=>'O campo nome é obrigatório ser preenchido',
            'number.required'=>'O campo número é obrigatório ser preenchido',
            'number.numeric'=>'O campo so aceita números',
            'category.required'      =>' Obrigatório o preencimento'
        ];
    }
}
