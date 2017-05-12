<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorsRequest;
use App\Sponsor;
use App\Sponsors;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("assets.sponsors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SponsorsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponsorsRequest $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsor  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sponsor $sponsors
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Sponsor $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sponsor $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsors)
    {
        //
    }
}
