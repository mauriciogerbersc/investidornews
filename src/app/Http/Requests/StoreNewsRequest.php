<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
        return [
            'category' => 'required',
            'title' => 'required|string|max:255|min:10',
            'text' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'O campo categoiria é obrigatório.',
            'text.required' => 'O campo conteúdo é obrigatório.',
            'title.required' => 'O título é obrigatório.',
            'title.max' => 'O título deve ter no máximo 255 caracteres',
            'title.min' => 'O título deve ter no mínimo 8 caracteres.',
        ];
    }
}
