<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 8/28/2017
     * Time: 5:24 PM
     */

    namespace App\Http\Controllers;


    use App\Http\Requests\ImportRequests;
    use Illuminate\Http\Request;

    class ImportUsersController extends Controller
    {


        public function store(ImportRequests $requests)
        {
            if ($requests->hasFile('cvs')) {
                $data = $requests->imports(10, 0);

                return dump($data);
            }

            return back()->with("error", "Failed to import file");

        }

    }
