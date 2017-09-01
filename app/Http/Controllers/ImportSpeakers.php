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
use Laracasts\Flash\Flash;

class ImportSpeakers extends Controller
{

    public function store(ImportRequests $request)
    {

        if ($request->hasFile("cvs")) {

            $data = $request->imports(20, 0);

            DB::transaction(function () use ($data) {

                foreach ($data as $speaker):
                    $password = str_random();
                    $saved = User::insertGetId([
                        "email" => isset($speaker["email_address"]) ? $speaker["email_address"] : null,
                        "name" => isset($speaker["first_name"]) ? $speaker["first_name"] : null ." ".isset($speaker["last_name"]) ? $speaker["last_name"] : null,
                        "password" => Hash::make($password),
                    ]);

                if(!$saved):
                    Flash()->error("Error Importing, please verify that your data is valid.");
                    abort('400', "Error importing file");
                // throw exception
                endif;

                endforeach;

            });

            Flash()->success("Workshop data imported");
            return back();

        }

        return back()->with("error", "Failed to import file");

    }

}
