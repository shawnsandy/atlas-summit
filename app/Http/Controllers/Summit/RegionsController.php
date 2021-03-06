<?php

    namespace App\Http\Controllers\Summit;

    use App\Http\Controllers\Controller;
    use App\Regions;
    use Illuminate\Http\Request;
    use Laracasts\Flash\Flash;

    class RegionsController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $regions = Regions::all();

            return view("partials.regions.index", compact('regions'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('partials.regions.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $region = new Regions();

            $region->name = $request->name;
            $region->address = $request->address;
            $region->lat = $request->lat;
            $region->long = $request->long;
            $region->phone = $request->phone;
            $region->website = $request->website;
            $region->region_number = $request->region_number;

            if (!empty($request->file('logo'))):
                $ext = $request->file('logo')->getClientOriginalExtension();
                $file = $request->region_number . '.' . $ext;
                $region->logo = $file;
                $request->file('logo')->move(base_path() . '/public/img/regions/', $file);

            endif;

            $region->save();

            Flash()->success('Region Created!');

            return redirect('/admin/regions/');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Regions $regions
         * @return \Illuminate\Http\Response
         */
        public function show(Regions $regions)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Regions $regions
         * @return \Illuminate\Http\Response
         */
        public function edit(Regions $regions)
        {
            return $this->view("assets.regions.edit");
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\Regions             $regions
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Regions $regions)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Regions $regions
         * @return \Illuminate\Http\Response
         */
        public function destroy(Regions $regions)
        {
            //
        }
    }
