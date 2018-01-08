<?php

namespace App\Http\Controllers\Summit;

use App\Http\Controllers\Controller;
use App\User;
use App\Workshop;
use Auth;
use Illuminate\Http\Request;

class WshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::all();
        return view("partials.wshops.index",  compact("workshops"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workshop = Workshop::with("users")->withCount('users')->where("id", $id)->first();
        $users = collect($workshop->users);
        $registered = (count($users->where('id', Auth::id()) ) ) ? true : false;
        return view("partials.wshops.show", compact("workshop", "registered"));
    }

}
