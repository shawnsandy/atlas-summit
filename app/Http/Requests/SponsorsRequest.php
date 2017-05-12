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
        return false;
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
            'contact_phone' => 'required|max:11|min:7',
            'contact_email' => 'required|email',
            'company_name' => 'required|max:255',
            'sponsor_description' => 'required',
            'sponsor_logo' => 'required|file|image',
            'sponsor_banner' => 'required|file|image',
        ];
    }
}
