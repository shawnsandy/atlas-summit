<?php

    namespace App\Http\Controllers\Summit;

    use App\Http\Controllers\Controller;
    use App\Regions;
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
            return view("partials.administrator.index");
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
