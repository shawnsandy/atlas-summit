<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 8/28/17
 * Time: 2:23 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ImportWorkshops extends Controller
{

    public function store(Request $request) {
        if($request->hasFile("cvs")){

            $request->file('cvs')->getRealPath();



        }
    }

}
