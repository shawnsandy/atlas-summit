<?php

    namespace App\Http\Controllers\Summit;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\WorkshopRequest;
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

            return view("partials.workshops.index", compact('workshops'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view("partials.workshops.create");
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \App\Http\Requests\WorkshopRequest|\Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(WorkshopRequest $request)
        {

            if (!$workshop = Workshop::create($request->all())):

                return back()->withErrors()->with("error", "Failed to save workshop");

            endif;

            return redirect("/dashboard/workshops/$workshop->id/edit")->with('success', "Workshop Created");

        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Workshop $workshop
         * @return \Illuminate\Http\Response
         */
        public function show(Workshop $workshop)
        {

        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param $workshop_id
         * @return \Illuminate\Http\Response
         * @internal param \App\Workshop $workshop
         */
        public function edit($workshop_id)
        {
            $workshop = Workshop::find($workshop_id);

            return view('partials.workshops.edit', compact("workshop"));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \App\Http\Requests\WorkshopRequest|\Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function update(WorkshopRequest $request, $workshop_id)
        {
            $workshop = Workshop::updateOrCreate(['id' => $workshop_id  ], $request->all());

            if (!empty($workshop)):
                return back()->with('success', 'Workshop Updated!');
            endif;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Workshop $workshop
         * @return \Illuminate\Http\Response
         */
        public function destroy(Workshop $workshop)
        {
            //
        }

    }
