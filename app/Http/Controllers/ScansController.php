<?php

namespace App\Http\Controllers;

use App\Scans;
use App\User;
use Illuminate\Http\Request;
use App\Rooms;
use Vinkla\Pusher\Facades\Pusher;
use Kamaln7\Toastr\Facades\Toastr;

class ScansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $room_id = null;

        if(request()->has("room_id"))
            $room_id = request('room_id');

        $rooms = Rooms::pluck('name', 'id');
        return view("scans.index", compact('rooms', 'room_id'));
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

        $room = Rooms::where('id', $request->room_id)->first();

        $scan = new Scans();

        $scan->user_id = $user->id;
        $scan->room_id = $request->room_id;

        $scan->save();

        $message = $user->first_name . ' ' .  $user->last_name . ' just entered ' . $room->name;

        Pusher::trigger('admin', 'new_scan', ['message' => $message]);

        Toastr::info('Welcome to ' . $room->name . ' ' . $user->first_name . ' ' .  $user->last_name, $title = 'Success!', $options = []);
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
