<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::all();

        return view("rooms.index", compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Rooms();

        $room->name = $request->name;
        $room->capacity = $request->capacity;

        $room->save();

        flash()->success('Room Created!');

        return redirect('/admin/rooms/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $room = Rooms::find($id);

        return view("rooms.edit", compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Rooms::find($id);

        if ($room):

            $room->name = $request->name;
            $room->capacity = $request->capacity;

            $room->save();

            Flash()->success('Room Updated!');

            return redirect('/admin/rooms');

        endif;

        Flash()->error('Something Went Wrong, Please Try Again.', $title = 'Updated Failed!', $options = []);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Rooms::findOrFail($id);
        $room->delete();

        Flash()->success('Room Deleted!');

        return redirect('/admin/rooms');
    }
}
