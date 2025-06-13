<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePublicacaoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'conteudo' => 'nullable|string',
            'status' => ['nullable', Rule::in(['ativo', 'inativo'])],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
