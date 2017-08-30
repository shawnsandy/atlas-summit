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
                            "email" => $user["email_address"],
                            "name" => $user["name"],
                            "password" => Hash::make($password),
                        ]);
                        //run or store additional actions
                        Flash()->success( "Users data imported");
                    } catch (Exception $e) {
//                        Flash()->error("Error Importing, please verify that your data is valid.");
//                        return back();
                        return $e->getMessage() ;
                    }

                endforeach;

            });

            return back();
        }

        return back()->with("error", "Failed to import file");

    }

}
