<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    //
    public function index(){
        $tourGuides = User::where('type', 3)->get(); 
        return view('frontend.ShowTourGuides', compact('tourGuides'));
    }

    public function tourGuideProfile(String $id){  //this is user id
        $tourGuide = TourGuide::where('userId', $id)->first();
        $user = User::find($id);
         // Pass the tour guide data to the view
         return view('frontend.tourGuideSingle', compact('tourGuide' , 'user'));

    }
    
}
