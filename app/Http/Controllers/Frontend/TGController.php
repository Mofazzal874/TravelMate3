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
    {
        $tourGuide = TourGuide::where('userId', $id)->first();
        $user = User::find($id);
        return view('frontend.tourGuideSingle', compact('tourGuide', 'user'));
    }

    public function tourGuidesForAPlace(String $id)
    {
        $tourGuides = TourGuide::where('places_id', $id)->with('user')->get();
        return view('frontend.showTourGuides', compact('tourGuides'))->with('isAllGuides', false);
    }
}
