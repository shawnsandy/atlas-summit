<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Notifications\AccountActivation;
use App\Session;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Notification;

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

        return view("users.index", compact('users'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $password = str_random();
        $data = $request->all();
        $data['password'] = Hash::make($password);
        $data['is_activated'] = 0;

        if (!$user = User::create($data)):
            return back()->withErrors()->with("error", "Sorry you user was not saved");
        endif;

        Notification::send($user, new AccountActivation($user, $password));

        return back()->with("success", "User created");

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
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
