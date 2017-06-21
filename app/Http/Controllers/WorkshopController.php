<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::all();

        return view("workshops.index", compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Rooms::pluck('name', 'id');

        return view("workshops.create", compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workshop = new Workshop();

        $workshop->name = $request->name;
        $workshop->description = $request->description;
        $workshop->date = $request->date;
        $workshop->start_time = $request->start_time;
        $workshop->end_time = $request->end_time;
        $workshop->room_id = $request->room_id;

        $workshop->save();

        flash()->success('Workshop Created!');

        return redirect('/admin/workshops/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::find($id);
        $rooms = Rooms::pluck('name', 'id');

        return view('workshops.edit', compact('workshop', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workshop = Workshop::find($id);

        if ($workshop):

            $workshop->name = $request->name;
            $workshop->description = $request->description;
            $workshop->date = $request->date;
            $workshop->seats = $request->seats;
            $workshop->start_time = $request->start_time;
            $workshop->end_time = $request->end_time;
            $workshop->room_id = $request->room_id;

            $workshop->save();

            flash()->success('Workshop Updated!');

            return redirect('/admin/workshops/');

        endif;

        Flash()->error('Something Went Wrong, Please Try Again.', $title = 'Updated Failed!', $options = []);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->delete();

        Flash()->success('Workshop Deleted!');

        return redirect('/admin/workshops');
    }
}
