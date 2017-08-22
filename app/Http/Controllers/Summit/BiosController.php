<?php

namespace App\Http\Controllers\Summit;

use App\Bio;
use App\Http\Requests\BioRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BiosController extends Controller
{

    public function __construct()
    {

        $user = User::inRandomOrder()->first();
        Auth::loginUsingId(Auth::id(), true);

        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bios = Auth::user()->bio()->first();

        if (!$bios)
            return redirect('/summit/bios/create')->with('info', "Sorry, your bio was not found. Create your Bio now");

        $user_info = User::with("bio", "workshops")->where("id", Auth::id())->first();

        return view('partials.bios.index', compact("bios", "user_info"));

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
     * @param \App\Http\Requests\BioRequest|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BioRequest $request)
    {


        $data = $request->input();

        if ($avatar = $request->uploads())
            $data['avatar'] = $avatar;

        if(!$save = Auth::user()->bio()->create($data))
            return back()->with("error", "Sorry there was an error creating your Bio. Please contact a system admin");

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
        $bio = Bio::with("user")->where("id", $id)->first();

        if (!count($bio))
            return redirect("/")->with("info", "Sorry user bio not found.");

        return view('partials.bios.show', compact("bio"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if ($bio = Auth::user()->bio()->find($id)):
            return view("partials.bios.edit", compact("bio"));
        endif;
        return redirect('/')->with('error', "Sorry you are unauthorized to perform this action");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param BioRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BioRequest $request, $id)
    {
        $bio = Auth::user()->bio()->find($id);

        $data = $request->input();
        if ($avatar = $request->uploads())
            $data['avatar'] = $avatar;


        if ($update = $bio->update($data)):
            return back()->with('success', "Your Bio has been updated.");
        else :
            return back()->with('error', "Failed to update the Bio.");
        endif;

        back()->with('error', "Sorry your bio was not found");
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
