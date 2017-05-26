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
        $ws = Workshop::find($workshop_id);
        $user = User::inRandomOrder()->first();
        try {
            $ws->users()->attach($user->id);
        } catch (Exception $exception) {
            \Log::error($exception->getMessage());
            return back("error", "You are already registered");
        }


       return  back()->with("success", "You are registered for this workshop!");

    }

}
