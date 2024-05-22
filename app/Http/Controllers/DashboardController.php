<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\TourGuide;
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
        $profile = User::findOrFail(auth()->user()->id);
        return view('user.profile.dashboard', compact('profile'));
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
        $profile = User::findOrFail(auth()->user()->id);
        // $tourGuideInfo = TourGuide::where('userId', auth()->user()->id)->first();
        return view('tourGuide.profile.dashboard' , compact('profile'));
    }
    // public function updateBookingAndPricing(String $id){

    // }
}
