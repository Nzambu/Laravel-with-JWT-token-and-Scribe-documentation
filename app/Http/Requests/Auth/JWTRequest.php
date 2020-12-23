<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class JWTRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email" => "required|string",
            "password" => "required|string"
        ];
    }

    /**
     * Documentation
     */
    public function bodyParameters() {
        return [
            "email" => [
                "description" => "The registered user email",
            ],
            "password" => [
                "description" => "The user secret code",
            ],
        ];
    }
}
