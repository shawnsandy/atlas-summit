<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BioRequest extends FormRequest
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
            "biography" => "required|max:1200",
            "job_title" => "required|max:200",
            "avatar" => "image:size:5000",
        ];
    }

    public function uploads()
    {
        if($this->hasFile("avatar")) :
            return $this->file("avatar")->store("img", "public");
        else:
            return null;
        endif;
    }

}
