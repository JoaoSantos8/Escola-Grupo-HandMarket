<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class NoticiaRequest extends FormRequest
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
        $currentId = $this->noticia ? $this->noticia->id : null;
        $img_rule = $this->noticia ? 'nullable' : 'required';
        return [
            "titulo" => 'required|min:3|max:255|unique:noticias,titulo,' .
                $currentId ,
            "descricao" => 'required|min:100|unique:noticias,descricao,' .
                $currentId ,
            "data" => 'required|date|unique:noticias,data,' . $currentId,
            "image" => $img_rule.'|image|mimes:jpeg,png,jpg,gif|max:2048',
           
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
            'titulo.regex' => 'O titulo deve conter apenas letras e espaços',
            'descricao.regex' => 'A descrição deve conter apenas letras e espaços',
        ];
    }

}
