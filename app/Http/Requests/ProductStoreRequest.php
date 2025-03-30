<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'string|min:0|max:255',
            'description' => 'string|min:0|max:2000',
            'price' => 'numeric|min:0|max:999999.99',
            'currency' => 'string|min:0|max:255',
            'vat_rate' => 'numeric|min:0|max:999.99',
            'tag_name' => 'nullable|string|min:0|max:20',
            'tag_color' => 'nullable|string|min:0|max:255|in:grey,green,blue,orange,red,black|required_with:tag_name',
            'sort' => 'numeric|min:0'
        ];
    }
}
