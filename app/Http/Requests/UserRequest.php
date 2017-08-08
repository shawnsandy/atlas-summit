<?php

namespace App\Http\Requests;

use App\Notifications\AccountActivation;
use App\User;
use DB;
use Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Notification;
use Silber\Bouncer\BouncerFacade as Bouncer;

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
        dd($this->request);
        return [
            "first_name" => "required|min:5",
            "last_name" => "required|min:5",
            "email" => "required|email|unique:users",
            "password" => "sometimes|required|min:8",
            "password_verify" => "sometimes|required|same:password"
        ];

    }


    public function register() {

        $password = str_random();
        $data = $this->input();
        $data['password'] = Hash::make($password);
        $data['is_activated'] = 0;

            if ($user = User::create($data)):
                Bouncer::assign($this->input('role'))->to($user);
                Notification::send($user, new AccountActivation($user, $password));
                return $user;
            endif;



        return false;

    }

    public function update($id)
    {



    }

}
