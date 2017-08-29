<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 8/28/17
 * Time: 3:04 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel as Excel;

class ImportRequests extends FormRequest
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

    public function rules()
    {
        return [
            'cvs' => 'required|file'
        ];
    }


    public function imports($limitColumns = 10, $skipRows=3)
    {

        if ($this->hasFile('cvs')):

            $file = $this->file("cvs")->getRealPath();
            return Excel::load($file, function ($reader) {
            })->limitColumns($limitColumns)->skipRows($skipRows)->toArray();

        endif;

        return false;
    }


}
