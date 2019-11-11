<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getLeadership()
    {
        return view('leadership');

    }

    public function getHomeKeeping()
    {
        return view('homeKeeping');
    }
}

