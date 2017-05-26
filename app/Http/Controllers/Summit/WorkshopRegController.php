<?php

namespace App\Http\Controllers\Summit;

use App\User;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class WorkshopRegController extends Controller
{
    public function __invoke($workshop_id)
    {
        $user = User::find(\Auth::id());

        $workshop = Workshop::find($workshop_id);

        $check = $workshop->where('id', $workshop_id)->whereHas('users', function($query) use ($user){
            return $query->where('id', $user->id);
        })->get();

        if(count($check) < 1):
        $user->workshops()->attach($workshop_id);
        return redirect("/summit/u/{$workshop_id}")->with("success", "You are registered for this workshop!");
        endif;

        return redirect("/summit/u/{$workshop_id}")->with("error", "It appears you are already registered for this workshop!");

    }

}
