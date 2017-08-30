<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 8/28/17
 * Time: 2:23 PM
 */

namespace App\Http\Controllers;


use App\Http\Requests\ImportRequests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Facades\App\Workshop;

class ImportWorkshops extends Controller
{

    public function store(ImportRequests $request)
    {

        if ($request->hasFile("cvs")) {

            $data = $request->imports(20, 0);

            \DB::transaction(function () use ($data) {
                foreach ($data as $workshops):
                    if (count($workshops)):
                        $ws = Workshop::insertGetId(
                            [
                                "workshop_id" => $workshops['id'],
                                "name" => $workshops["title"],
                                "description" => $workshops["description"],
                                "start_time" => $workshops["start_date_time"],
                                "end_time" => $workshops["end_date_time"],
                                "seats" => $workshops["capacity"],
                                "date" => Carbon::now(),
                                "room" => $workshops["venue"],
                                "speakers" => $workshops["speakers"]
                            ]
                        );
                    endif;
                    if (!$ws):
                        Flash()->error("Error Importing, please verify that your data is valid.");
                        return back();
                    endif;

                endforeach;

            });

            Flash()->success("Workshop data imported");
            return back();

        }


        return back()->with("error", "Failed to import file");

    }

}
