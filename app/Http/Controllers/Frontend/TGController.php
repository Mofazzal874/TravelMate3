<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TGController extends Controller
{
    public function index()
    {
        $tourGuides = TourGuide::with('user')->get();
        return view('frontend.showTourGuides', compact('tourGuides'))->with('isAllGuides', true);
        //zehetu same showTourGuides.blade.php file dui khane use kora hoise(also in tourGuideForAPlace function dekho) , 
        //tai view te isALLGuides variable ta pass kora hoise and view te zaiya check kortechi je isALLGuides true kina
    }

    public function tourGuideProfile(String $id)
    {   //find the tourGuide by userId in the TourGuide model
        $tourGuide = TourGuide::where('userId', $id)->first();
        //find the user by id in the User model as we are passing the userId from the showTourGuides.blade.php file
        $user = User::find($id);
        return view('frontend.tourGuideSingle', compact('tourGuide', 'user'));
    }

    public function tourGuidesForAPlace(String $id)
    {
        $tourGuides = TourGuide::where('places_id', $id)->with('user')->get();
        return view('frontend.showTourGuides', compact('tourGuides'))->with('isAllGuides', false);
    }
    public function bookTourGuide()
    {
        return view('frontend.booking');
    }
}
