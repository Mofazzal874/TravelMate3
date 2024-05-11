<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
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
    $profile = User::findOrFail(auth()->user()->id);
    return view('admin.profile.dashboard', compact('profile'));
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
