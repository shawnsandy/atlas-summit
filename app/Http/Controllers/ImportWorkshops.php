<?php
    /**
     * Created by PhpStorm.
     * User: shawnsandy
     * Date: 8/28/17
     * Time: 2:23 PM
     */

    namespace App\Http\Controllers;


    use App\Http\Requests\ImportRequests;
    use Illuminate\Http\Request;
    use Laracasts\Flash\Flash;

    class ImportWorkshops extends Controller
    {

        public function store(ImportRequests $request)
        {

            if ($request->hasFile("cvs")) {

                $data = $request->imports(10, 0);

                return dump($data);

            }


            return back()->with("error", "Failed to import file");

        }

    }
