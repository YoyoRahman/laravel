<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                   "title" => "required",
            "status" => "required|in:0,1",
            "body" => "required",
            "image" => "nullable|mimes:png,jpg,webp,jpeg",
        ];
    }
}
