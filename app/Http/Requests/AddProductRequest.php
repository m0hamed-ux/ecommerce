<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required',
            'name.min' => 'Product name must be at least 3 characters',
            'description.required' => 'Product description is required',
            'description.min' => 'Product description must be at least 10 characters',
            'price.required' => 'Product price is required',
            'price.numeric' => 'Product price must be a number',
            'price.min' => 'Product price must be at least 0',
            'category.required' => 'Product category is required',
            'category.min' => 'Product category must be at least 3 characters',
            'image.required' => 'Product image is required',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg',
        ];
    }
}
