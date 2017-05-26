<?php

namespace App\Http\Controllers\Summit;

use App\Bio;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BiosController extends Controller
{

    public function __construct()
    {

        $user = User::inRandomOrder()->first();
        Auth::loginUsingId($user->id, true);

        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bio = Bio::find(Auth::id());

        if (is_null($bio))
            return redirect('/summit/bios/create')->with('info', "Sorry, your bio was not found. Create your Bio now");

        return view('partials.bios.index', compact("bio"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("partials.bios.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = Auth::id();
        $user = User::find($id);
        $save = $user->bio()->create($request->all());

        return redirect("/summit/bios/{$save->id}/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bio = Bio::find($id);

        if (Auth::id() == $bio->user_id):
            return view("partials.bios.edit", compact("bio"));
        endif;
        return redirect('/')->with('error', "Sorry you are unauthorized to perform this action");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bio = Bio::find($id);

        if ($update = Bio::updateOrCreate(['id' => $bio->id, 'user_id' => Auth::id()], $request->all())):
            Bio::updateOrCreate(['id' => $bio->id, 'user_id' => Auth::id()], $request->all());
            return back()->with('success', "Your Bio has been updated.");
        else :
            return back()->with('error', "Failed to update the Bio.");
        endif;

        back()->with('error', "Sorry your bio wan not found");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}