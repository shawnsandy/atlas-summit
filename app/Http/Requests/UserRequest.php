<?php

namespace App\Http\Requests;

use App\Notifications\AccountActivation;
use App\User;
use DB;
use Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Notification;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Silber\Bouncer\Database\Role;

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
        if ($this->input("_method") == "PUT")
            return [
                "first_name" => "required|min:5",
                "last_name" => "required|min:5",
                "update_email" => "required|email|sometimes:unique:users",
                "password" => "sometimes|required|min:8",
                "password_verify" => "sometimes|required|same:password"
            ];

        return [
            "first_name" => "required|min:4",
            "last_name" => "required|min:4",
            "email" => "required|email|unique:users",
            "password" => "sometimes|required|min:8",
            "password_verify" => "sometimes|required|same:password"
        ];

    }


    public function register()
    {

        $password = str_random();
        $data = $this->input();
        $data['password'] = Hash::make($password);
        $data['is_activated'] = 1;

        if ($user = User::create($data)):

            if(!Role::where('name', $this->input('role'))->count())
            Bouncer::allow($this->input('role'))->to($this->input('role').'-ability');

            Bouncer::assign($this->input('role'))->to($user);
            Notification::send($user, new AccountActivation($user, $password));
            return $user;
        endif;

        return false;

    }

    public function update($id)
    {

        $password = str_random();
        $data = $this->input();

        if (!empty($data['update_email']))
            $data['email'] = $data['update_email'];

        if ($user = User::updateOrCreate(["id" => $id], $data)):
            return $user;
        endif;
        return false;

    }

}
