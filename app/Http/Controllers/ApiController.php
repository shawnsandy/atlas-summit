<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function users($start = null, $end = null)
    {
        $stats = DB::table('users')
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get([
                DB::raw('DATE_FORMAT(created_at,"%m-%d-%Y") as date'),
                DB::raw('COUNT(*) as users'),
            ]);

        return $stats;

    }
}
