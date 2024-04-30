<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function userDashboard()
    {
        return view('user.dashboard');
    }
 
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function managerDashboard()
    {
        return view('manager.dashboard');
    }
    public function tourGuideDashboard()
    {
        return view('tourGuide.dashboard');
    }
}
