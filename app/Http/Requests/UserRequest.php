<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "first_name" => "required|min:5",
            "last_name" => "required|min:5",
            "email" => "required|email|unique:users",
            "password" => "sometimes|required|min:8",
            "password_verify" => "sometimes|required|same:password"
        ];
    }
}
