<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorsRequest extends FormRequest
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
            //
            'contact_name' => 'required|max:255',
            'contact_phone' => 'required|max:20|min:10',
            'contact_email' => 'required|email',
            'company_name' => 'required|max:255',
            'company_name' => 'required|max:255',
        ];
    }
}
