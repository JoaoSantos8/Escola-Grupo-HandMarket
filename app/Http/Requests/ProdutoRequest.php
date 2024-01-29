<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ProdutoRequest extends FormRequest
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
        $currentId = $this->produto ? $this->produto->id : null;
        $img_rule = $this->produto ? 'nullable' : 'required';
        return [
            "nome" => 'required|min:3|max:255|unique:produtos,nome,' .
                $currentId ,
            "descricao" => 'required|min:100|unique:produtos,descricao,' .
                $currentId ,
            "image" => $img_rule.'|image|mimes:jpeg,png,jpg,gif|max:2048',
            'artesao_id' =>'required|exists:artesaos,id',
           
        ];
    }

    

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'descricao.regex' => 'A descrição deve conter apenas letras e espaços',
        ];
    }

}
