<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Regions;
use App\Session;
use App\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $regions = Regions::regionsList();

        return view("users.index", compact('users', 'regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        if ($user = $request->register()):
            Flash()->success('New user created');
            return back()->with("success", "User created");
        endif;
        Flash()->error('Error creating user');
        return back()->with("error", "Sorry user was not saved");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::find($user);

        if (count($user) < 1)
            return back()->with('error', "User not found");

        return view("dash::useradmin-page", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->load('workshops');
        $regions = Regions::regionsList();
        $users = User::latest()->take(10)->get();
        return view("users.edit", compact('users', 'user', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserEditRequest|UserRequest|Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {

        if ($request->update($user->id)):
            Flash()->success("Updated user info");
            return back();
        endif;

        Flash()->error("Failed to update user info, please contact a system admin for info");
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


}
