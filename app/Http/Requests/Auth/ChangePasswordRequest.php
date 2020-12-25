<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            "password" => "required|string|min:8",
            "password_confirmation" => "required|confirmed"
        ];
    }

    /**
     * Documentation
     */
    public function bodyParameters() {
        return [
            "password" => [
                "description" => "The new password that is a minimum of 8 characters",
            ],
            "password_confirmation" => [
                "description" => "Re-type the new password as a confirmation",
            ]
        ];
    }
}
