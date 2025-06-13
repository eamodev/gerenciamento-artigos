<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePublicacaoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'titulo' => 'sometimes|required|string|max:255',
            'conteudo' => 'nullable|string',
            'status' => ['nullable', Rule::in(['ativo', 'inativo'])],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
