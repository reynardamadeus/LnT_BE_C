<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => ['required', 'min:1'],
            'description' => ['required', 'min:1'],
            'author' => ['required', 'min:3'],
            'release_date' => ['required'],
            'price' => ['required', 'integer', 'min:0']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Namanya belum dimasukin bos",
            'description.required' => "Deskripsinya belum dimasukin",
            'price.required' => "Harganya belum dimasukin",
            'price.min' => "Harganya masa gratis?"
        ];
    }
}
