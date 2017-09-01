<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 8/28/17
 * Time: 2:23 PM
 */

namespace App\Http\Controllers;


use App\Http\Requests\ImportRequests;
use DB;
use Facades\App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Laracasts\Flash\Flash;
use Facades\Silber\Bouncer\Bouncer;

class ImportSpeakers extends Controller
{

    public function store(ImportRequests $request)
    {

        if ($request->hasFile("cvs")) {

            $data = $request->imports(20, 0);

            DB::transaction(function () use ($data) {

                foreach ($data as $speaker):

                    $find_user = User::where('email', $speaker["email_address"])->first();
                    if (!count($find_user)):

                        $password = str_random();
                        $saved = User::insertGetId([
                            "email" => isset($speaker["email_address"]) ? $speaker["email_address"] : null,
                            "name" => isset($speaker["first_name"]) ? $speaker["first_name"] : null . " " . isset($speaker["last_name"]) ? $speaker["last_name"] : null,
                            "password" => Hash::make($password),
                        ]);

                        if (!$saved):
                            Flash()->error("Error Importing, please verify that your data is valid.");
                            abort('400', "Error importing file");
                            // throw exception
                        endif;

                        $user = User::find($saved);
                        // insert the speaker bio

                        Bouncer::assign("speaker")->to($user);
//                        Notification::send($user, new AccountActivation($user, $password));

                    endif;

                endforeach;

            });

            Flash()->success("Workshop data imported");
            return back();

        }

        return back()->with("error", "Failed to import file");

    }

}
