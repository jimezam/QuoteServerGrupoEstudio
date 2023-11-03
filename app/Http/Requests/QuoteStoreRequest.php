<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
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
            'author' => 'nullable|string|max:60',
            'published_year' => 'nullable|integer|max_digits:4|date_format:Y|before:today',
            'message' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'author.alpha' => 'El nombre del autor sólo debe estar compuesto por letras.',
            'author.required' => 'El nombre del autor es obligatorio.',
        ];
    }
}
