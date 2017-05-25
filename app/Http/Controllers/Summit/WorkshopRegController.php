<?php

namespace App\Http\Controllers\Summit;

use App\User;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkshopRegController extends Controller
{
    public function __invoke($workshop_id)
    {
        $ws = Workshop::find($workshop_id);
        $user = User::inRandomOrder()->first();
        $ws->users()->attach($user->id);

       return  back()->with("success", "You are registered for this workshop!");

    }

}
