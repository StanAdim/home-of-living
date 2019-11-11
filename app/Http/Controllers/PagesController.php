<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getWelcome()
    {
        return view('welcome');
    }

    public function getAbout_us()
    {
        return view('about');
    }
}
