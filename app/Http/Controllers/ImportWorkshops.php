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
                                "key" => isset($workshops['id']) ? $workshops['id'] : null,
                                "name" => isset($workshops["title"]) ? $workshops["title"] : null,
                                "description" => isset($workshops["description"]) ? $workshops["description"] : null,
                                "start_time" => isset($workshops["start_date_time"]) ? $workshops["start_date_time"] : null,
                                "end_time" => isset($workshops["end_date_time"]) ? $workshops["end_date_time"] : null,
                                "seats" => isset($workshops["capacity"]) ? $workshops["capacity"] : null,
                                "date" => Carbon::now(),
                                "room" => isset($workshops["venue"]) ? $workshops["venue"] : null,
                                "speakers" => isset($workshops["speakers"]) ? $workshops["speakers"] : null
                            ]
                        );
                    endif;

                    if (!$ws):
                        Flash()->error("Error Importing, please verify that your data is valid.");
                        abort('400', "Error importing file");
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
