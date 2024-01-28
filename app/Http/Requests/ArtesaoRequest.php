<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ArtesaoRequest extends FormRequest
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
        $currentId = $this->artesao ? $this->artesao->id : null;
        $img_rule = $this->artesao ? 'nullable' : 'required';
        return [
            "Nome" => 'required|min:3|max:80|unique:artesaos,nome,' .
                $currentId ,
            "idade" => 'required|unique:artesaos,idade,' . $currentId ,
            "telefone" => 'required |unique:artesaos,telefone,' . $currentId,
            "dataRegisto" => 'required|date|unique:artesaos,dataRegisto,' . $currentId,
            "image" => $img_rule.'|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ];
    }

    public function validationData()
    {
        return array_merge($this->all(), [
            'dataRegisto' => Carbon::now(),
        ]);
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O titulo deve conter apenas letras e espaços',
            'idade.regex' => 'A idade deve conter apenas números',
            'telefone.regex' => 'O telefone deve conter apenas 9 números',
        ];
    }

}
