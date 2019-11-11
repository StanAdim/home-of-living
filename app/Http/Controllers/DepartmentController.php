<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function getIct()
    {
        return view('departments.ict');
    }
    public function getTreasury()
    {
        return view('departments.treasury');
    }
    public function getProjects()
    {
        return view('departments.projects');
    }
    public function getHomeKeeping()
    {
        return view('departments.homeKeeping');
    }
    public function getLeadership()
    {
        return view('departments.leaderships');
    }
}
