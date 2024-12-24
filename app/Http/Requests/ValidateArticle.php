<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Make sure to change this if you need to authorize specific users
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|max:255',
            'description' => 'string',
            'files' => 'nullable|mimes:jpeg,png,jpg,gif,pdf,svg,tiff,webp|max:2048',
            'category_id' => 'exists:categories,id',
            'tags.*' => 'exists:tags,id',
        ];
    }

    /**
     * Get custom validation messages.
     */
    public function messages()
    {
        return [
            'title.max' => 'The title cannot contain more than 255 characters.',
            'files.mimes' => 'The file must be a jpeg, png, jpg, gif, or pdf.',
            'files.max' => 'The file size cannot exceed 2MB.',
            'category_id.exist' => 'Please select a valid category.',
        ];
    }
}
