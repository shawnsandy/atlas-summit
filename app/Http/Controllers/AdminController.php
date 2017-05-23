<?php

    namespace App\Http\Controllers;

    use App\Regions;
    use App\Rooms;
    use App\Scans;
    use App\Sponsor;
    use App\User;
    use App\Workshop;
    use Illuminate\Http\Request;
    use Auth;

    class AdminController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {

            $regions = Regions::all();
            $rooms = Rooms::all();
            $scans = Scans::all();
            $sponsors = Sponsor::all();
            $users = User::all();
            $workshops = Workshop::all();

            return view("admin.index", compact('regions', 'rooms', 'scans', 'sponsors', 'users', 'workshops'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('assets.regions.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
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
