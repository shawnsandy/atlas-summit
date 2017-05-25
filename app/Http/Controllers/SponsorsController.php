<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorsRequest;
use App\Sponsor;
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
        $sponsors = Sponsor::all();

        return view("sponsors.index", compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sponsors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SponsorsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponsorsRequest $request)
    {
        $sponsor = new Sponsor();

        $clean_sponsor_name = strtolower($this->seoUrl($request->company_name));

        $sponsor->contact_name = $request->contact_name;
        $sponsor->contact_email = $request->contact_email;
        $sponsor->contact_phone = $request->contact_phone;
        $sponsor->company_name = $request->company_name;
        $sponsor->company_address = $request->address;
        $sponsor->lat = $request->lat;
        $sponsor->long = $request->long;
        $sponsor->company_phone = $request->company_phone;
        $sponsor->company_email = $request->company_email;
        $sponsor->sponsor_description = $request->sponsor_description;
        $sponsor->sponsor_slug = $clean_sponsor_name;
        $sponsor->sponsor_url = $request->sponsor_url;
        $sponsor->sponsor_level = $request->sponsor_level;

        if (!empty($request->file('banner_image'))):
            $ext = $request->file('banner_image')->getClientOriginalExtension();
            $file = $clean_sponsor_name . '.' . $ext;
            $sponsor->logo = $file;
            $request->file('banner_image')->move(base_path() . '/public/img/sponsors/banners/', $file);

        endif;

        if (!empty($request->file('logo'))):
            $ext = $request->file('logo')->getClientOriginalExtension();
            $file = $clean_sponsor_name . '.' . $ext;
            $sponsor->logo = $file;
            $request->file('logo')->move(base_path() . '/public/img/sponsors/logos/', $file);

        endif;

        $sponsor->save();

        Flash()->success('Sponsor Created!');

        return redirect('/admin/sponsors/');
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
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);

        return view("sponsors.edit", compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Sponsor $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sponsor = Sponsor::find($id);

        if ($sponsor):

            $clean_sponsor_name = strtolower($this->seoUrl($request->company_name));

            $sponsor->contact_name = $request->contact_name;
            $sponsor->contact_email = $request->contact_email;
            $sponsor->contact_phone = $request->contact_phone;
            $sponsor->company_name = $request->company_name;
            $sponsor->company_address = $request->address;
            $sponsor->lat = $request->lat;
            $sponsor->long = $request->long;
            $sponsor->company_phone = $request->company_phone;
            $sponsor->company_email = $request->company_email;
            $sponsor->sponsor_description = $request->sponsor_description;
            $sponsor->sponsor_slug = $clean_sponsor_name;
            $sponsor->sponsor_url = $request->sponsor_url;
            $sponsor->sponsor_level = $request->sponsor_level;

            if (!empty($request->file('banner_image'))):
                $ext = $request->file('banner_image')->getClientOriginalExtension();
                $file = $clean_sponsor_name . '.' . $ext;
                $sponsor->logo = $file;
                $request->file('banner_image')->move(base_path() . '/public/img/sponsors/banners/', $file);

            endif;

            if (!empty($request->file('logo'))):
                $ext = $request->file('logo')->getClientOriginalExtension();
                $file = $clean_sponsor_name . '.' . $ext;
                $sponsor->logo = $file;
                $request->file('logo')->move(base_path() . '/public/img/sponsors/logos/', $file);

            endif;

            $sponsor->save();

            Flash()->success('Sponsor Updated!');

            return redirect('/admin/sponsors/');

        endif;

        Flash()->error('Something Went Wrong, Please Try Again.', $title = 'Updated Failed!', $options = []);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sponsor $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();

        Flash()->success('Sponsor Deleted!');

        return redirect('/admin/sponsors');
    }

    public function seoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "_", $string);
        return $string;
    }
}
