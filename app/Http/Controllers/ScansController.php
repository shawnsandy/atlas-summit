<?php

namespace App\Http\Controllers;

use App\Scans;
use App\User;
use Illuminate\Http\Request;
use App\Rooms;

class ScansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::pluck('name', 'id');
        return view("scans.index", compact('rooms'));
    }

    public function scans($id)
    {
        $room_id = $id;
        return view("scans.scans", compact('room_id'));
    }

    public function room(Request $request)
    {

        return redirect('/scans/' . $request->room_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('rfid', $request->rfid)->first();

        $scan = new Scans();

        $scan->user_id = $user->id;
        $scan->room_id = $request->room_id;

        $scan->save();

        Flash()->success('Welcome ' . $user->first_name . '!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scans  $scans
     * @return \Illuminate\Http\Response
     */
    public function show(Scans $scans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scans  $scans
     * @return \Illuminate\Http\Response
     */
    public function edit(Scans $scans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scans  $scans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scans $scans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scans  $scans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scans $scans)
    {
        //
    }
}
