<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:125',
            'description' => 'required|string|min:10|max,255',
            'purchase_price' => 'required|numeric|min:1|max:99999999',
            'selling_price' => 'required|numeric|min:1|max:99999999|gt:purchase_price',
        ];
    }
}
