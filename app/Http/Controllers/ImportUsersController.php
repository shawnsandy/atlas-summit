<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 8/28/2017
 * Time: 5:24 PM
 */

namespace App\Http\Controllers;


use App\Http\Requests\ImportRequests;
use App\Notifications\AccountActivation;
use Facades\App\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Laracasts\Flash\Flash;
use Mockery\Exception;
use Facades\Silber\Bouncer\Bouncer;

class ImportUsersController extends Controller
{


    public function store(ImportRequests $requests)
    {

        if ($requests->hasFile('cvs')) {

            $data = $requests->imports(10, 0);


            DB::transaction(function () use ($data) {

                foreach ($data as $user):

                    $find_user = User::where('email', $user["email_address"])->first();
                    if (!count($find_user)):

                        $password = str_random();
                        $user_array = [
                            "email" => isset($user["email_address"]) ? $user["email_address"] : null,
                            "name" => isset($user["name"]) ? $user["name"] : null,
                            "password" => Hash::make($password),
                        ];
                        try {

                            $saved = User::insertGetId($user_array);

                            if (!$saved):

                                // should throw exception and reverse transactions here
                                Flash()->error("Error Importing, please verify that your data is valid.");
                                abort('400', "Error importing file");
                                return back();

                            endif;
                            $user = User::find($saved);
                            //run or store additional actions
                            Bouncer::assign("user")->to($user);

//                            Notification::send($user, new AccountActivation($user, $password));
                        } catch (Exception $e) {
                            return $e->getMessage();
                        }

                    endif;
                endforeach;

                Flash()->success("Users data imported");
                return back();

            });


        }

        return back()->with("error", "Failed to import file");

    }

}
