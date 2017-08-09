<?php

namespace App\Http\Controllers\Summit;

use App\Http\Controllers\Controller;
use App\Scans;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ScansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param null $room
     * @return Response
     */
    public function index($room = null)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scans  $scans
     * @return Response
     */
    public function show(Scans $scans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scans  $scans
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, Scans $scans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scans  $scans
     * @return Response
     */
    public function destroy(Scans $scans)
    {
        //
    }
}
