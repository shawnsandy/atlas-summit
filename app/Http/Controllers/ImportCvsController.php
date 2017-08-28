<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 8/28/17
 * Time: 10:43 AM
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImportRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as Storage;
use Maatwebsite\Excel\Facades\Excel as Excel;

class ImportCvsController extends Controller
{

    public function index()
    {

    }

    public function store(ImportRequests $request)
    {
        $data = $request->imports();

        dd($data);

    }

    public function update()
    {
    }

}
