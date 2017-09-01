<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 8/28/2017
 * Time: 5:24 PM
 */

namespace App\Http\Controllers;


use App\Http\Requests\ImportRequests;
use Facades\App\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Mockery\Exception;

class ImportUsersController extends Controller
{


    public function store(ImportRequests $requests)
    {

        if ($requests->hasFile('cvs')) {

            $data = $requests->imports(7, 0);

            DB::transaction(function () use ($data) {

                foreach ($data as $user):

                    $password = str_random();

                    try {
                        $saved = User::insertGetId([
                            "email" => isset($user["email_address"]) ? $user["email_address"]: null,
                            "name" => isset($user["name"]) ? $user["name"] : null,
                            "password" => Hash::make($password),
                        ]);

                        if (!$saved):
                            // should throw exception and reverse transactions here
                            Flash()->error("Error Importing, please verify that your data is valid.");
                            abort('400', "Error importing file");
                            return back();
                        endif;
                        //run or store additional actions
                    } catch (Exception $e) {
                        return $e->getMessage();
                    }

                endforeach;
                Flash()->success("Users data imported");
                return back();

            });


        }

        return back()->with("error", "Failed to import file");

    }

}
