<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class feiraRequest extends FormRequest
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
        $currentId = $this->feira ? $this->feira->id : null;
        $img_rule = $this->feira ? 'nullable' : 'required';

        return [
            "nome" => 'required|min:3|max:255|unique:feiras,feiraNome,' . $currentId,
            "descricao" => 'required|min:10|unique:feiras,feiraDescricao,' . $currentId,
            "localizacao" => 'required|min:4|unique:feiras,feiraLocalizacao,' . $currentId,
            "dataInicio" => 'required|date|unique:feiras,feiraDataInicio,' . $currentId,
            "dataFim" => 'required|date|after_or_equal:dataInicio|unique:feiras,feiraDataFim,' . $currentId,
            "preco" => 'required|numeric|min:0|unique:feiras,feiraPreco,' . $currentId,
            "imagem" => $img_rule . '|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

    }

    public function validationData()
    {
        return array_merge($this->all(), [
            'data' => Carbon::now(),
        ]);
    }

    public function messages()
    {
        return [
            /*N Quis mensagens eu*/
        ];
    }

}
